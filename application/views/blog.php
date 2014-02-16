{% extends "base_template.php" %}

{% block content %}

<div class="blog">
{% for post in posts %}
	<div class="row">
		<div class="col-md-12">
    		<h1>{{ post.title|raw }}</h1>
    		{{ post.content|raw }}
    		<hr>
    	</div>
    </div>
{% endfor %}

</div>

{% endblock %}
