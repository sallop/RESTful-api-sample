<table border=1>
{% for row in rows %}
<tr>
<th>{{row.food_name}}</th>
<th>{{row.price}}</th>
</tr>
{% else %}
{% endfor %}
</table>
