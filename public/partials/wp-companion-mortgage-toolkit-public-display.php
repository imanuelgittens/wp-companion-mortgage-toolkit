<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://wpcompanion.io/
 * @since      1.0.0
 *
 * @package    Wp_Companion_Mortgage_Toolkit
 * @subpackage Wp_Companion_Mortgage_Toolkit/public/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div id="wp-companion-mortgage-toolkit" class="wp-companion-mortgage-wrapper" >
	<div class="wp-companion-mortgage__calculator">
		<form class="wp-companion-mortgage__calculator-form" name="wp-companion-mortage-calculator" method="post">
			<input type="text" placeholder="Enter amount you wish to borrow" name="mortgageAmount"/>
			<select name="mortgagePeriod">
				<option value="5">5</option>
				<option value="10">10</option>
				<option value="15">15</option>
				<option value="20">20</option>
				<option value="25">25</option>
				<option value="30">30</option>
			</select>
			<input type="text" placeholder="Enter the rate" name="mortgageRate"/>
			<input type="text" placeholder="Enter a downpayment (if applicable)" name="mortgageDownpayment"/>
			<input type="submit" value="Calculate Monthly Payment"/>
		</form>
	</div>
</div>
