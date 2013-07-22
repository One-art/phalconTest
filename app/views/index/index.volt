{{ aUser.name }}

<ul>
{% for user in userList %}
  <li>{{ user.name|e }}</li>
  <li>{{ user.password|e }}</li>
  <li>{{ date("d-m-Y", user.time_register) }}</li>
  {% if user.time_last_visit is not empty %}
        <li>{{ date("d-m-Y", user.time_last_visit) }}</li>
    {% else %}
        <li>not entry</li>
  {% endif %}
{% endfor %}
</ul>