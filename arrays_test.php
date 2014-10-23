<?php 
$Arrays = array(
	array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ), 
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
    );

################
# Random Color functions
################
function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}
$colors = array();
#END

################
# Get All Available keys
################
$indexs = array();
// My code start here
foreach ($Arrays as $array) {
	$indexs = array_unique( array_merge($indexs,array_keys($array)) );
}
#END

#################
# Display Part
#################
?>
<table border="1">
	<thead>
		<tr>
			<?php 
			foreach ($indexs as $index) {
				####################
				# generate random color
				####################
				$colors[$index] = random_color();
				#END
				echo "<th style='color:#".$colors[$index].";font-weight:bold'>".$index."</th>";
			}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($Arrays as $array) {
			echo "<tr>";
			foreach ($indexs as $index) {
				echo "<td style='color:#".$colors[$index]."'>".$array[$index]."</td>";
			}
			echo "</tr>";
		}
		?>
	</tbody>
</table>
<?php 
#END
?>