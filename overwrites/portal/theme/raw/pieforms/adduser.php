<?php
echo $form_tag;
?>

<div id="adduser-t">
    <div class="step step1" id="step1">
        <h3><?php echo get_string('usercreationmethod', 'admin'); ?></h3>
        <p class="step-descript"><?php echo get_string('howdoyouwanttocreatethisuser', 'admin'); ?></p>
        <div class="choice"><input type="radio" name="createmethod" class="ic"<?php if (!isset($_POST['createmethod']) || $_POST['createmethod'] == 'scratch') { ?> checked="checked"<?php } ?> id="createfromscratch" value="scratch"> <label for="createfromscratch"><?php echo get_string('createnewuserfromscratch', 'admin'); ?></label></div>
        <table>
<?php foreach (array('firstname', 'lastname', 'email') as $field) { ?>
            <tr>
                <th><?php echo $elements[$field]['labelhtml']; ?></th>
                <td><?php echo $elements[$field]['html']; ?></td>
            </tr>
<?php if ($elements[$field]['error']) { ?>
            <tr>
                <td class="errmsg" colspan="2"><?php echo $elements[$field]['error']; ?></td>
            </tr>
<?php } ?>
<?php } ?>
        </table>
        <div id="or"><?php echo get_string('Or...', 'admin'); ?></div>
        <div class="choice"><input type="radio" name="createmethod" class="ic"<?php if (isset($_POST['createmethod']) && $_POST['createmethod'] == 'leap2a') { ?> checked="checked"<?php } ?> id="uploadleap" value="leap2a"> <label for="uploadleap"><?php echo get_string('uploadleap2afile', 'admin'); ?></label> <?php echo get_help_icon('core', 'admin', 'adduser', 'leap2afile'); ?></div>
        <?php echo $elements['leap2afile']['html']; ?>
<?php if ($elements['leap2afile']['error']) { ?>
        <div class="errmsg"><?php echo $elements['leap2afile']['error']; ?></div>
<?php } ?>
    </div>
    <div class="filler">&raquo;</div>
    <div class="step step2">
        <h3><?php echo get_string('basicdetails', 'admin'); ?></h3>
        <p class="step-descript"><?php echo get_string('basicinformationforthisuser', 'admin'); ?></p>
        <table>
<?php foreach(array('username', 'password', 'staff', 'admin', 'authinstance', 'quota', 'institutionadmin', 'country', 'state') as $field) { ?>
            <tr>
                <th><?php echo $elements[$field]['labelhtml']; ?></th>
                <td><?php echo $elements[$field]['html']; ?></td>
            </tr>
<?php if (isset($elements[$field]['error'])) { ?>
            <tr>
                <td class="errmsg" colspan="2"><?php echo $elements[$field]['error']; ?></td>
            </tr>
<?php } ?>
<?php } ?>
        </table>
    </div>
    <div class="filler">&raquo;</div>
    <div class="step step3">
        <h3><?php echo get_string('create', 'admin'); ?></h3>
        <p class="step-descript"><?php echo get_string('clickthebuttontocreatetheuser', 'admin'); ?></p>
        <div class="center"><?php echo $elements['submit']['html']; ?></div>
        <div id="step3info"><?php echo get_string('userwillreceiveemailandhastochangepassword', 'admin'); ?></div>
    </div>
</div>
<div id="adduseroptions">
<?php

// Render account preferences with a renderer (inside this template :D)
$accountprefs = (object) expected_account_preferences();
$accountprefs = array_keys(general_account_prefs_form_elements($accountprefs));
$fieldset_elements = array();
foreach ($accountprefs as $p) {
    $fieldset_elements[] = $elements[$p];
}

$accountoptions_fieldset = array(
    'type' => 'fieldset',
    'legend' => get_string('accountoptionsdesc', 'account'),
    'collapsible' => true,
    'collapsed' => true,
    'elements' => $fieldset_elements,
);

$this->include_plugin('renderer', $this->data['renderer']);
$this->include_plugin('element', 'fieldset');
$this->build_element_html($accountoptions_fieldset);

echo pieform_render_element($this, $accountoptions_fieldset);

echo $hidden_elements;
echo '</form>';
?>
</div>

<script type="text/javascript">
function show_states_list(country) {
	var us_json_data = {
		"Alabama": "Alabama", "Alaska": "Alaska", "American Samoa": "American Samoa", "Arizona": "Arizona", "Arkansas": "Arkansas", "California": "California", "Colorado": "Colorado", "Connecticut": "Connecticut", "Delaware": "Delaware", "District Of Columbia": "District Of Columbia", "Federated States Of Micronesia": "Federated States Of Micronesia", "Florida": "Florida", "Georgia": "Georgia", "Guam": "Guam", "Hawaii": "Hawaii", "Idaho": "Idaho", "Illinois": "Illinois", "Indiana": "Indiana", "Iowa": "Iowa", "Kansas": "Kansas", "Kentucky": "Kentucky", "Louisiana": "Louisiana", "Maine": "Maine", "Marshall Islands": "Marshall Islands",  "Maryland": "Maryland", "Massachusetts": "Massachusetts", "Michigan": "Michigan", "Minnesota": "Minnesota", "Mississippi": "Mississippi", "Missouri": "Missouri", "Montana": "Montana", "Nebraska": "Nebraska", "Nevada": "Nevada", "New Hampshire": "New Hampshire", "New Jersey": "New Jersey", "New Mexico": "New Mexico", "New York": "New York", "North Carolina": "North Carolina", "North Dakota": "North Dakota", "Northern Mariana Islands": "Northern Mariana Islands", "Ohio": "Ohio", "Oklahoma": "Oklahoma", "Oregon": "Oregon", "Palau": "Palau", "Pennsylvania": "Pennsylvania", "Puerto Rico": "Puerto Rico", "Rhode Island": "Rhode Island", "South Carolina": "South Carolina", "South Dakota": "South Dakota", "Tennessee": "Tennessee", "Texas": "Texas", "Texas": "Utah", "Vermont": "Vermont", "Virgin Islands": "Virgin Islands", "Virginia": "Virginia", "Washington": "Washington", "West Virginia": "West Virginia", "Wisconsin": "Wisconsin", "Wyoming": "Wyoming"
	};
	 
	var ca_json_data = {
		"Alberta": "Alberta", "British Columbia": "British Columbia", "Manitoba": "Manitoba", "New Brunswick": "New Brunswick", "Newfoundland and Labrador": "Newfoundland and Labrador", "Northwest Territories": "Northwest Territories", "Nova Scotia": "Nova Scotia", "Connecticut": "Connecticut", "Delaware": "Delaware", "District Of Columbia": "District Of Columbia", "Federated States Of Nunavut": "Federated States Of Nunavut", "Ontario": "Ontario", "Prince Edward Island": "Prince Edward Island", "Quebec": "Quebec", "Saskatchewan ": "Saskatchewan", "Yukon": "Yukon"
	};
	if(country == "United States") {
		//console.log(us_json_data);
		var html = "";
		jQuery("#adduser_state").html("");
		jQuery.each(us_json_data, function(key, val) {
			html += '<option value="'+key+'">'+val+'</option>';
		});
		jQuery("#adduser_state").html(html);
	} else if(country == "Canada") {
		//console.log(ca_json_data);
		var html = "";
		jQuery("#adduser_state").html("");
		jQuery.each(ca_json_data, function(key, val) {
			html += '<option value="'+key+'">'+val+'</option>';
		});
		jQuery("#adduser_state").html(html);		
	}	
}
jQuery("#adduser_country").change(function(){
	show_states_list(jQuery(this).val());
});
jQuery( document ).ready(function() {
	show_states_list(jQuery("#adduser_country").val());
});	
</script>
