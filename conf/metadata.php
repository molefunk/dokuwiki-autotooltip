<?php
$meta['style'] = array('string');
$meta['delay'] = array('numeric', '_min' => 0, '_max' => 10000);
$meta['linkall_inclusions'] = array('regex');
$meta['linkall_exclusions'] = array('regex');





# From purplenumbers
$meta['numbering']        = array('multichoice','_choices' => array(0,1));
$meta['uniqueness']       = array('multichoice','_choices' => array(0,1));
$meta['internalID']       = array('onoff');
$meta['linkText']         = array('multichoice','_choices' => array(0,1));
$meta['restrictionNS']    = array('string');
$meta['restrictionType']  = array('multichoice','_choices' => array(0,1));
$meta['includeStartpage'] = array('onoff');
$meta['annotationPage']   = array('string');
