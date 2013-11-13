<?php
$answers = array();
$default = null;
foreach ($options as $key => $option) {
	$answers[$option['value']] = $option['text'];
	if (array_key_exists ('default', $option) && $option['default'])
		$default = $option['value'];
}
if (!isset ($desc)) {
	$desc = null;
}

echo $this->Html->tag ('label', $label);
echo $this->Form->input($field, array('type' => 'radio', 'legend' => false, 'options' => $answers, 'default' => $default, 'after' => $desc));
?>
