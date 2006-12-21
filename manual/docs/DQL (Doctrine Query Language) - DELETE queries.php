<div class='sql'>
<pre>
DELETE FROM <i>component_name</i>
    [WHERE <i>where_condition</i>]
    [ORDER BY ...]
    [LIMIT <i>record_count</i>]
</pre>
</div>
<ul>
<li \>The DELETE statement deletes records from <i>component_name</i> and returns the number of records deleted.

<li \>The optional WHERE clause specifies the conditions that identify which records to delete.
Without WHERE clause, all records are deleted.

<li \>If the ORDER BY clause is specified, the records are deleted in the order that is specified.

<li \>The LIMIT clause places a limit on the number of rows that can be deleted. 
The statement will stop as soon as it has deleted <i>record_count</i> records.

</ul>