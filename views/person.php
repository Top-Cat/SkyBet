<tr class="person">
<td><input type="text" class="firstname" name="people[<?=$vars['x']; ?>][firstname]" value="<?=$vars['person']->getFirstName(); ?>" /></td>
<td><input type="text" class="surname" name="people[<?=$vars['x']; ?>][surname]" value="<?=$vars['person']->getLastName(); ?>" /></td>
<td><input type="text" class="jobtitle" name="people[<?=$vars['x']; ?>][jobtitle]" value="<?=$vars['person']->getJobTitle(); ?>" /></td>
</tr>
