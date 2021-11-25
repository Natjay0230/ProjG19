<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base/index.html.twig */
class __TwigTemplate_62d9d1ea0e8f659400bdbd1215debad7d4cbf02d926a21e2d521e517079131cb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/index.html.twig"));

        // line 1
        echo "<nav class= *navbar-expand-lg navbar-light bg-white border-botton>
    <div
        class=*container*>

        <a class=*navbar-brand* href=*.index.html*>
            <img src=*/img/logo.png* class=*navbar-brand-img* alt=*...*>
        </a>

        <button class=*navbar-toggler* type=*button* data-bs-toggle=*collapse* data-bs-target=*@navbarCollapse* >
            <span class=*navbar-toggler-icon*> </span>
        </button>

        <div class=*collapse navbar-collapse* >
        ";
        // line 15
        echo "
            <button class=*navbar-toggler* type=*button* data-bs-toggle=*collapse* data-bs-target=*@navbarCollapse* >
                <i class=*fe fe-x*></i>
            </button>

            <ul class=*navbar ms-auto*>
                <li class=*nav-item dropdown*>
                    <a href=*#* class=*nav-link* href=*#*>liste</a>
                </li>
                <li class=*nav-item dropdown*>
                    <a href=*#* class=*nav-link* href=*#*>liste2</a>
                </li>

            </ul>

        </div>
    </div>

</nav>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class= *navbar-expand-lg navbar-light bg-white border-botton>
    <div
        class=*container*>

        <a class=*navbar-brand* href=*.index.html*>
            <img src=*/img/logo.png* class=*navbar-brand-img* alt=*...*>
        </a>

        <button class=*navbar-toggler* type=*button* data-bs-toggle=*collapse* data-bs-target=*@navbarCollapse* >
            <span class=*navbar-toggler-icon*> </span>
        </button>

        <div class=*collapse navbar-collapse* >
        {# id=*navbarCollapse*> #}

            <button class=*navbar-toggler* type=*button* data-bs-toggle=*collapse* data-bs-target=*@navbarCollapse* >
                <i class=*fe fe-x*></i>
            </button>

            <ul class=*navbar ms-auto*>
                <li class=*nav-item dropdown*>
                    <a href=*#* class=*nav-link* href=*#*>liste</a>
                </li>
                <li class=*nav-item dropdown*>
                    <a href=*#* class=*nav-link* href=*#*>liste2</a>
                </li>

            </ul>

        </div>
    </div>

</nav>


", "base/index.html.twig", "/home/hassy/Documents/Projet_esti_g19/Projet_g19/digital_notebook/templates/base/index.html.twig");
    }
}
