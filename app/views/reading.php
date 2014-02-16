{% extends "base_template.php" %}

{% block content %}
{% for article in list %}
	<div class="row">
		<div class="col-md-12">
    		<h3>{{ article.given_title|raw }}</h3>
    		{{ article.excerpt }} . . .
    		<br><a target="__blank" href="{{ article.given_url|raw }}">Read the full article</a>
    		<hr>
    	</div>
    </div>
{% endfor %}
{% endblock %}
