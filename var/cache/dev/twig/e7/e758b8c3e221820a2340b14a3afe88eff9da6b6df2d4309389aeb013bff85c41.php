<?php

/* AppBundle::index.html.twig */
class __TwigTemplate_fa3e79f2ca515de6dacdcd66187df2caab10e93ffdcb94036cd00bdaae36ae36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93e2fa6b563221f48875fb211b1f538b0351a027abef46052382c804b87fa9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e2fa6b563221f48875fb211b1f538b0351a027abef46052382c804b87fa9e8->enter($__internal_93e2fa6b563221f48875fb211b1f538b0351a027abef46052382c804b87fa9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::index.html.twig"));

        $__internal_60dd0b0c9c4fbefd7e2cdc3a4d3e9770165e8ed9c74d937685b7c9bfe45e82c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60dd0b0c9c4fbefd7e2cdc3a4d3e9770165e8ed9c74d937685b7c9bfe45e82c0->enter($__internal_60dd0b0c9c4fbefd7e2cdc3a4d3e9770165e8ed9c74d937685b7c9bfe45e82c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Welcome to chat</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script src=";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/goswebsocket/js/vendor/autobahn.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/goswebsocket/js/gos_web_socket_client.js"), "html", null, true);
        echo "></script>
</head>
<body>
    <div class=\"chat_wrapper\">
        <div class=\"message_box\" id=\"message_box\"></div>
        <div class=\"panel\">
            <input type=\"text\" name=\"message\" id=\"message\" placeholder=\"Message\" maxlength=\"80\" style=\"width:60%\" />
            <button id=\"send-btn\">Send</button>
        </div>
    </div>
    <script>
        var websocket = WS.connect(\"ws://127.0.0.1:1337\");
        websocket.on(\"socket/connect\", function(session){
            \$(document).ready(function () {
                \$('#send-btn').click(function () {
                    var input_message = \$('#message').val();
                    session.call(\"sample/sum\", input_message).then(
                        function(message) {
                            var chat_message = message['result'];
                            \$('#message_box').append(chat_message+'<br>');
                            \$('#message').val('');
                        },
                        function(error, desc)
                        {
                            console.log(\"RPC Error\", error, desc);
                        }
                    );
                });
            });
        });
        websocket.on(\"socket/disconnect\", function(error){
            //error provides us with some insight into the disconnection: error.reason and error.code
            console.log(\"Disconnected for \" + error.reason + \" with code \" + error.code);
        });
    </script>
</body>
</html>";
        
        $__internal_93e2fa6b563221f48875fb211b1f538b0351a027abef46052382c804b87fa9e8->leave($__internal_93e2fa6b563221f48875fb211b1f538b0351a027abef46052382c804b87fa9e8_prof);

        
        $__internal_60dd0b0c9c4fbefd7e2cdc3a4d3e9770165e8ed9c74d937685b7c9bfe45e82c0->leave($__internal_60dd0b0c9c4fbefd7e2cdc3a4d3e9770165e8ed9c74d937685b7c9bfe45e82c0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  37 => 8,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>Welcome to chat</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js\"></script>
    <script src={{ asset('bundles/goswebsocket/js/vendor/autobahn.min.js') }}></script>
    <script src={{ asset('bundles/goswebsocket/js/gos_web_socket_client.js') }}></script>
</head>
<body>
    <div class=\"chat_wrapper\">
        <div class=\"message_box\" id=\"message_box\"></div>
        <div class=\"panel\">
            <input type=\"text\" name=\"message\" id=\"message\" placeholder=\"Message\" maxlength=\"80\" style=\"width:60%\" />
            <button id=\"send-btn\">Send</button>
        </div>
    </div>
    <script>
        var websocket = WS.connect(\"ws://127.0.0.1:1337\");
        websocket.on(\"socket/connect\", function(session){
            \$(document).ready(function () {
                \$('#send-btn').click(function () {
                    var input_message = \$('#message').val();
                    session.call(\"sample/sum\", input_message).then(
                        function(message) {
                            var chat_message = message['result'];
                            \$('#message_box').append(chat_message+'<br>');
                            \$('#message').val('');
                        },
                        function(error, desc)
                        {
                            console.log(\"RPC Error\", error, desc);
                        }
                    );
                });
            });
        });
        websocket.on(\"socket/disconnect\", function(error){
            //error provides us with some insight into the disconnection: error.reason and error.code
            console.log(\"Disconnected for \" + error.reason + \" with code \" + error.code);
        });
    </script>
</body>
</html>", "AppBundle::index.html.twig", "/home/artem/Develop/chat/src/AppBundle/Resources/views/index.html.twig");
    }
}
