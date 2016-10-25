<?php

/**
 * Created by PhpStorm.
 * User: kamilciesielski
 * Date: 22.10.2016
 * Time: 22:34
 */
class Modul
{

    public static function load($nazwaModulu){

        switch ($nazwaModulu){



            case "rejestracja":


                echo "

                   
             <form class=\"form-horizontal\">
                <fieldset>
                        <!-- Form Name -->
                        <legend>Form Name</legend>
                        
                        <!-- Text input-->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"textinput\">Text Input</label>  
                          <div class=\"col-md-4\">
                          <input id=\"textinput\" name=\"textinput\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
                          <span class=\"help-block\">help</span>  
                          </div>
                        </div>
                        
                        <!-- Text input-->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"textinput\">Text Input</label>  
                          <div class=\"col-md-4\">
                          <input id=\"textinput\" name=\"textinput\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
                          <span class=\"help-block\">help</span>  
                          </div>
                        </div>
                        
                        <!-- Select Basic -->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"selectbasic\">Select Basic</label>
                          <div class=\"col-md-4\">
                            <select id=\"selectbasic\" name=\"selectbasic\" class=\"form-control\">
                              <option value=\"1\">Option one</option>
                              <option value=\"2\">Option two</option>
                            </select>
                          </div>
                        </div>
                        
                        <!-- Select Basic -->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"selectbasic\">Select Basic</label>
                          <div class=\"col-md-4\">
                            <select id=\"selectbasic\" name=\"selectbasic\" class=\"form-control\">
                              <option value=\"1\">Option one</option>
                              <option value=\"2\">Option two</option>
                            </select>
                          </div>
                        </div>
                        
                        <!-- Text input-->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"textinput\">Text Input</label>  
                          <div class=\"col-md-4\">
                          <input id=\"textinput\" name=\"textinput\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
                          <span class=\"help-block\">help</span>  
                          </div>
                        </div>
                        
                        <!-- Password input-->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"passwordinput\">Password Input</label>
                          <div class=\"col-md-4\">
                            <input id=\"passwordinput\" name=\"passwordinput\" type=\"password\" placeholder=\"placeholder\" class=\"form-control input-md\">
                            <span class=\"help-block\">help</span>
                          </div>
                        </div>
                        
                        <!-- Password input-->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"passwordinput\">Password Input</label>
                          <div class=\"col-md-4\">
                            <input id=\"passwordinput\" name=\"passwordinput\" type=\"password\" placeholder=\"placeholder\" class=\"form-control input-md\">
                            <span class=\"help-block\">help</span>
                          </div>
                        </div>
                        
                        <!-- Button -->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"singlebutton\">Single Button</label>
                          <div class=\"col-md-4\">
                            <button id=\"singlebutton\" name=\"singlebutton\" class=\"btn btn-primary\">Button</button>
                          </div>
                        </div>
                        
                        <!-- Text input-->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"textinput\">Text Input</label>  
                          <div class=\"col-md-4\">
                          <input id=\"textinput\" name=\"textinput\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
                          <span class=\"help-block\">help</span>  
                          </div>
                        </div>
                        
                        <!-- Text input-->
                        <div class=\"form-group\">
                          <label class=\"col-md-4 control-label\" for=\"textinput\">Text Input</label>  
                          <div class=\"col-md-4\">
                          <input id=\"textinput\" name=\"textinput\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
                          <span class=\"help-block\">help</span>  
                          </div>
                        </div>
                        
                        </fieldset>
                        </form>
                
                ";
                break;
            case "nawigacja":
                echo "<nav class=\"navbar navbar-default\">
                      <div class=\"container-fluid\">
                        <div class=\"navbar-header\">
                          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                          </button>
                          <a class=\"navbar-brand\" href=\"#\">Brand</a>
                        </div>
                    
                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                          <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"#\">Link</a></li>
                            <li class=\"dropdown\">
                              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                              <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Action</a></li>
                                <li><a href=\"#\">Another action</a></li>
                                <li><a href=\"#\">Something else here</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Separated link</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">One more separated link</a></li>
                              </ul>
                            </li>
                          </ul>
                          <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"form-group\">
                              <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                          </form>
                          <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\">Link</a></li>
                          </ul>
                        </div>
                      </div>
                    </nav>";

                break;
        }


    }

}