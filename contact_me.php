<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Este email no es correcto!";
   return false;
   }
   
 
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'walteros2006@yahoo.es'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "Tienes un mensaje de tu pagina web.\n\n"."Aqui estan los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>

<nav>
	<ul class="menu">
		<li><a href="">item1</a></li>
		<li><a href="">item2</a></li>
		<li><a href="">item3</a></li>
	</ul>
</nav>

<section class="negocio">
	<p></p>
</section>
<header>
	<nav class="menu">
		<ul>
			<li><a href="">item1</a></li>
			<li><a href="">item2</a></li>
			<li><a href="">item3</a></li>
		</ul>
	</nav>
</header>

<section class="negocio">
	<p id="contenido1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat saepe, delectus modi voluptate illo, enim distinctio esse? Eos sequi, tenetur facilis saepe explicabo impedit, officiis dolorum natus ratione necessitatibus voluptas.</p>
</section>