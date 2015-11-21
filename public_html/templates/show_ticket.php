<table border=1>
{% for row in rows %}
<tr>
<th> {{row.used_number}} </th>
<th> {{row.time}} </th>
</tr>
{% else %}
{% endfor %}
</table>
