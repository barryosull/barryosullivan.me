{% extends "base_template.php" %}

{% block content %}
<div class="row home">
	<div class="col-md-12">

		<a class="btn btn-default btn-lg" href="/reading">
			<span class="glyphicon glyphicon-book"></span>&nbsp;&nbsp;
			Reading
		</a>


		<a class="btn btn-default btn-lg" href="/blog">
			<span class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;
			Writing
		</a>

		<a class="btn btn-default btn-lg" target="__blank" href="http://github.com/barryosull">
			<span class="glyphicon glyphicon-file"></span>&nbsp;&nbsp;
			Coding
		</a>
	</div>
</div>
{% endblock %}
