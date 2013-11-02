<?php
# This class contols the users requests
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        # Setup view
        $this->template->content = View::instance('v_users_signup');
        $this->template->title   = "Sign Up";
             
        # Render template
        echo $this->template;
    }

    public function p_signup() {
        #error checking : if not fullfilled, send the error message.
        if(!$_POST['first_name']||!$_POST['last_name']||!$_POST['email'] || !$_POST['password']){
            die("You should fullfill all the inputs");
        }

        #error checking : compare POST data with database data
        $email = $_POST['email'];
////////////
        echo "//////////////////////";
        echo $email;
        echo "//";
///////////        

        $q = "select email from users
             where email = '$email'";
        $exist = DB::instance(DB_NAME)->select_field($q);     
        //compare POST with database already registered
        if($exist==$email){
            die("Your email $email is already registered");
        }
        
        # More data we want stored with the user
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Encrypt the password  
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

        # Create an encrypted token via their email address and a random string
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        # Insert this user into the database
        $user_id = DB::instance(DB_NAME)->insert('users', $_POST);

        //sending mail when a user signed up
        $to[]    = Array("name" => APP_NAME, "email" => $email);
        $from    = Array("name" => APP_NAME, "email" => APP_EMAIL);
        $subject = "hello??????????";              
        $body = View::instance('v_email_example');
        $cc = "";
        $bcc = "";
    
        # Send email
        Email::send($to, $from, $subject, $body, true, $cc, $bcc);
        echo "Mail sent. ";
        
        # For now, just confirm they've signed up - 
        # You should eventually make a proper View for this
        echo 'You\'re signed up as '. $_POST['first_name']." ". $_POST['last_name'];
    }

    public function login($error = NULL) {

        # Setup view
        $this->template->content = View::instance('v_users_login');
        $this->template->title   = "Login";
        # Pass data to the view
        $this->template->content->error = $error;

        # Render template
        echo $this->template;
    }
    public function p_login() {

        # Sanitize the user entered data to prevent any funny-business (re: SQL Injection Attacks)
        $_POST = DB::instance(DB_NAME)->sanitize($_POST);

        # Hash submitted password so we can compare it against one in the db
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        # Search the db for this email and password
        # Retrieve the token if it's available
        $q = "SELECT token 
            FROM users 
            WHERE email = '".$_POST['email']."' 
            AND password = '".$_POST['password']."'";

        $token = DB::instance(DB_NAME)->select_field($q);   

        # If we didn't get a token back, it means login failed
        if(!$token) {
            #checking specifically email or password
            /*
                if(){
                    
                }
                else(

                )
            */
            #checking specifically email or password

            # Send them back to the login page
            Router::redirect("/users/login/error");

        # But if we did, login succeeded! 
        } else {
            /* 
            Store this token in a cookie using setcookie()
            Important Note: *Nothing* else can echo to the page before setcookie is called
            Not even one single white space.
            param 1 = name of the cookie
            param 2 = the value of the cookie
            param 3 = when to expire
            param 4 = the path of the cooke (a single forward slash sets it for the entire domain)
            */
            setcookie("token", $token, strtotime('+1 year'), '/');

            # Send them to the main page - or whever you want them to go
            Router::redirect("/posts/index");
        }
    }

    public function logout() {

        # Generate and save a new token for next login
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());

        # Create the data array we'll use with the update method
        # In this case, we're only updating one field, so our array only has one entry
        $data = Array("token" => $new_token);

        # Do the update
        DB::instance(DB_NAME)->update("users", $data, "WHERE token = '".$this->user->token."'");

        # Delete their token cookie by setting it to a date in the past - effectively logging them out
        setcookie("token", "", strtotime('-1 year'), '/');

        # Send them back to the main index.
        Router::redirect("/");

    }

    public function profile() {
        #If user is blank, they're not logged in; redirect them to the login page
        if(!$this->user){
            Router::redirect('/users/login');
        }

        #If they weren't redirected away, continue:

        #setup view
        $this->template->content =View::instance('v_users_profile');
        $this->template->title = "Profile of".$this->user->first_name;

        # attach style.css in the head
        //$client_files_head = Array("/css/main.css");
        //$this->template->client_files_head = Utils::load_client_files($client_files_head);

        echo $this->template;
    }
} # end of the class