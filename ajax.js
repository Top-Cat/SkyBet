var User = function(data) {
	this.data = data;
};
User.prototype.generateRow = function(x) {
	return $('<tr/>', {class: "person"})
		.append(this.generateCell("firstname", this.data.firstname, x))
		.append(this.generateCell("surname", this.data.surname, x))
		.append(this.generateCell("jobtitle", this.data.jobtitle, x));
};
User.prototype.generateCell = function(name, val, x) {
	return $('<td/>').append(
		$('<input />', {class: name, name: "people[" + x + "][" + name + "]", value: val})
	);
};
$("form").submit(function(e) {
	var val = $("input[type=submit]:focus").val();
	console.log(val);

	params = {save: val=="OK"}
	if (val == "OK") {
		people = [];
		$(".person").each(function(index, obj) {
			var person = {};
			$(obj).find("input").each(function(index2, obj2) {
				person[$(obj2).attr('class')] = $(obj2).val();
			});
			people.push(person);
		});
		params['people'] = people;
	}

	$.ajax({
		type: "POST",
		url: "/?ajax=1",
		data: JSON.stringify(params),
		processData: false,
		dataType: 'json',
		success: function(data) {
			$("form .person").remove();
			for (x in data.people) {
				var user = new User(data.people[x]);
				$("form tr").last().after(user.generateRow(x));
			}
		}
	});
	e.preventDefault();
});
