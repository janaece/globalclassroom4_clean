<?php 
// Template email for expired trial notification to Global Classroom.

print $this->params['header_image'];
?>
<p>
	<br />
	Successful Additional Catalog Creation for Platform <?php print $this->params['institution_full_name'];?>.
	<br /><br />
	Time: <?php print $this->params['time']; ?>
	<br />
	User: <?php print $this->params['user']; ?>
	<br />
	Name: <?php print $this->params['name']; ?>
	<br />
	Email: <?php print $this->params['email']; ?>
	<br />
	Catalog Name: <?php print $this->params['eschool_full_name']; ?>
	<br />
	Catalog URL: <?php print $this->params['eschool_url']; ?>
	<br />
	Platform URL: <?php print $this->params['institution_url']; ?>
	<br /><br />
	Public Contact Info
	<br />
	Phone: <?php print $this->params['public_contact_phone']; ?>
	<br />
	Phone Alt: <?php print $this->params['public_contact_phone_alt']; ?>
	<br />
	Email: <?php print $this->params['public_contact_email']; ?>
	<br /><br />
	Admin Contact Info
	<br />
	Phone: <?php print $this->params['admin_contact_phone']; ?>
	<br />
	Phone Alt: <?php print $this->params['admin_contact_phone_alt']; ?>
	<br />
</p>