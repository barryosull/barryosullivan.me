{% extends "base_template.php" %}

{% block content %}
<div class="row home">
	<div class="col-md-offset-2 col-md-8">

		<img class="pull-right img-circle profile-pic" src="http://m.c.lnkd.licdn.com/mpr/mpr/shrink_80_80/p/5/005/021/3ca/06e0e0a.jpg">
			I am a full-stack software developer living and working in Dublin.<br>I like building software that gets used, software that brings value to people's lives, be that in business or in their personal lives. I have strong interests in business, management, culture as well as all aspects of software development<br><br>Above all else, I enjoy learning. Why not click below to see what's I've learned recently?
		<hr>
	</div>
	<div class="col-md-12 what-I-am">
		<h3>What I am currently . . .</h3>
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
