<?PHP

function getUserIP()
{
	    $client  = @$_SERVER['HTTP_CLIENT_IP'];
	        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
	        $remote  = $_SERVER['REMOTE_ADDR'];

		    if(filter_var($client, FILTER_VALIDATE_IP))
			        {
					        $ip = $client;
						    }
		        elseif(filter_var($forward, FILTER_VALIDATE_IP))
				    {
					            $ip = $forward;
						        }
		        else
				    {
					            $ip = $remote;
						        }

		    return $ip;
}


$user_ip = getUserIP();
?>
<HTML> 
<body>
<H1> Welcome to John's NGINX and PHP webserver running on Alpine</H1>
<H3>Running from minikube!!!</H3>
You have reached us!!! You IP address is:<?PHP
echo $user_ip; // Output IP address [Ex: 177.87.193.134]
?>
<h4> if you don't see the IP address, you have used the wrong port</h4>
</body>
</html>
