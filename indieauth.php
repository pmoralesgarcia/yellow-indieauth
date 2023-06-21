<?php
// Comment extension, https://github.com/pmoralesgarcia/yellow-indieauth

class YellowIndieAuth {
    const VERSION = "0.1.0";
    public $yellow;         //access to API
    public $response;       // web response
    public $merge;          // text merge
    public $editable;       // page can be edited? (boolean)
