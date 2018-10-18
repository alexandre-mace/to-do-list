<?php

/* task/list.html.twig */
class __TwigTemplate_ed3b6f6233281fcde1e697ebb86a787e9404d8789b41511fefc508ebca753bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if (twig_test_empty(($context["tasks"] ?? $this->getContext($context, "tasks")))) {
            // line 5
            echo "        <div class=\"jumbotron\">
          <h1 class=\"display-4 text-center\">Congratulations!</h1>
          <p class=\"lead text-center\">You've made it, now it's time to have fun <br><i class=\"mt-3 fas fa-grin-beam fa-10x\"></i></p>
        </div>         
    ";
        }
        // line 10
        echo "    <ul id=\"sortable\" class=\"list-group list-group-flush\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tasks"] ?? $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 12
            echo "            <li class=\"list-group-item  d-flex justify-content-between ";
            echo (($this->getAttribute($context["task"], "complete", array())) ? ("list-group-item-success") : (""));
            echo "\">
                <div class=\"d-flex flex-column\">
                    <h2>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo " <span class=\"badge badge-primary badge-pill\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "name", array()), "html", null, true);
            echo "</span></h2>
                    <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "description", array()), "html", null, true);
            echo "</p>
                </div>
                
                <div class=\"d-flex flex-column\">
                    <a class=\"btn btn-success\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_update", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-check fa-2x\"></i></a>
                    <a class=\"btn btn-danger mt-3\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_delete", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt fa-2x\"></i></a>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "task/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 24,  89 => 20,  85 => 19,  78 => 15,  72 => 14,  66 => 12,  62 => 11,  59 => 10,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% if tasks is empty %}
        <div class=\"jumbotron\">
          <h1 class=\"display-4 text-center\">Congratulations!</h1>
          <p class=\"lead text-center\">You've made it, now it's time to have fun <br><i class=\"mt-3 fas fa-grin-beam fa-10x\"></i></p>
        </div>         
    {% endif %}
    <ul id=\"sortable\" class=\"list-group list-group-flush\">
        {% for task in tasks %}
            <li class=\"list-group-item  d-flex justify-content-between {{ task.complete  ? 'list-group-item-success' }}\">
                <div class=\"d-flex flex-column\">
                    <h2>{{ task.title }} <span class=\"badge badge-primary badge-pill\">{{ task.user.name }}</span></h2>
                    <p>{{ task.description }}</p>
                </div>
                
                <div class=\"d-flex flex-column\">
                    <a class=\"btn btn-success\" href=\"{{ path('task_update', {'id': task.id}) }}\"><i class=\"fas fa-check fa-2x\"></i></a>
                    <a class=\"btn btn-danger mt-3\" href=\"{{ path('task_delete', {'id': task.id}) }}\"><i class=\"fas fa-trash-alt fa-2x\"></i></a>
                </div>
            </li>
        {% endfor %}
    </ul>
{% endblock %}", "task/list.html.twig", "/home/alex/Bureau/ecv/php/to_do_list/app/Resources/views/task/list.html.twig");
    }
}
