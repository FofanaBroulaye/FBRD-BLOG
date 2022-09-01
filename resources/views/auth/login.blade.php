<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="{{asset('loginstyles/css/demo.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('loginstyles/css/style3.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('loginstyles/css/animate-custom.css')}}" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                
                <span class="right">
                    <a href=" http://tympanus.net/codrops/2012/03/27/login-and-registration-form-with-html5-and-css3/">
                        <strong></strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1></span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="{{route('login')}}" method="post" autocomplete="on"> 
                                @csrf
                                <h1>Connexion</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Votre email</label>
                                    <input id="username" name="email" required="required" type="email" placeholder="mymail@mail.com"/>
                                    
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Votre mot de passe </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                    
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="remember" id="loginkeeping" value="loginkeeping" {{ old('remember') ? 'checked' : '' }} /> 
									<label for="loginkeeping">Se souvenir de moi</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Se connecter" /> 
								</p>
                                <p class="change_link">
									N'êtes vous pas un membre ?
									<a href="#toregister" class="to_register">Joingnez nous</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="{{route('register')}}" method="POST" autocomplete="on">
                                @csrf
                                <h1> S'enregistrer </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Nom complet</label>
                                    <input id="usernamesignup" name="name" value="{{ old('name') }}" required="required" type="text" placeholder="mysuperusername690" />
                                   
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Votre email</label>
                                    <input id="emailsignup" name="email" value="{{ old('email') }}" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                    
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Votre mot de passe </label>
                                    <input id="passwordsignup" name="password" value="{{ old('password') }}" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                   
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Confirmez le mot de passe </label>
                                    <input id="passwordsignup_confirm" name="password_confirmation" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                    
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Joindre"/> 
								</p>
                                <p class="change_link">  
									Je suis un membre?
									<a href="#tologin" class="to_register"> Connectez vous</a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>