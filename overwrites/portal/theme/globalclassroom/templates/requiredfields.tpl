{include file="header.tpl"}

{if $changepassword}
  {if $changeusername}
            <h1>{str tag="chooseusernamepassword"}</h1>
            <p>{str tag="chooseusernamepasswordinfo" arg1=$sitename}</p>
  {else}
            <h1>{str tag="changepassword"}</h1>
            <p>{str tag="changepasswordinfo"}</p>
  {/if}
            {if $loginasoverridepasswordchange}<div class="message">{$loginasoverridepasswordchange|safe}</div>{/if}
{else}
			<h1>{str tag='requiredfields' section='auth'}</h1>
{/if}

			{$form|safe}

{include file="footer.tpl"}

{literal}
    <script type="text/javascript">
        jQuery('#site-logo').hide();
    </script>
{/literal}

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
		jQuery("#requiredfields_state").html("");
		jQuery.each(us_json_data, function(key, val) {
			html += '<option value="'+key+'">'+val+'</option>';
		});
		jQuery("#requiredfields_state").html(html);
	} else if(country == "Canada") {
		//console.log(ca_json_data);
		var html = "";
		jQuery("#requiredfields_state").html("");
		jQuery.each(ca_json_data, function(key, val) {
			html += '<option value="'+key+'">'+val+'</option>';
		});
		jQuery("#requiredfields_state").html(html);		
	}	
}
jQuery("#requiredfields_country").change(function(){
	show_states_list(jQuery(this).val());
});
jQuery( document ).ready(function() {
	show_states_list(jQuery("#requiredfields_country").val());
});	
</script>