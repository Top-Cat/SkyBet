<tr>
<td><input type="text" name="people[<?=$vars['x']; ?>][firstname]" value="<?=$vars['person']->getFirstName(); ?>" /></td>
<td><input type="text" name="people[<?=$vars['x']; ?>][surname]" value="<?=$vars['person']->getLastName(); ?>" /></td>
<td><input type="text" name="people[<?=$vars['x']; ?>][jobtitle]" value="<?=$vars['person']->getJobTitle(); ?>" /></td>
</tr>
