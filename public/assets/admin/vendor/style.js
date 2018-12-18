$(document).ready(function(){

	var total_member = 1;
	function tambah(){
		var n = total_member + 1;
		var isi = '<div id="tambahSkill'+total_member+'" style="display: none">';

		isi += '<hr>';

		isi += '<div class="row form-group"><div class="col col-md-3"><label for="skills-input" class=" form-control-label">Skills</label></div><div class="col-12 col-md-9"><input type="text" id="skills-input" name="skills-input'+n+'" placeholder="Skills- '+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="persentase-input" class=" form-control-label">Persentase</label></div><div class="col-12 col-md-9"><input type="text" id="persentase-input" name="persentase-input'+n+'" placeholder="Persentase- '+n+'" class="form-control"></div></div>';

		isi += '</div>';
		$('#form-skill').append(isi);
		$('#tambahSkill'+total_member).fadeIn('slow');

		total_member++;
	}

	function hapus(){
		total_member--;
		if(total_member <= 1){
			total_member = 1;
		}
		$('#tambahSkill'+total_member).fadeOut('slow',function(){
			$(this).remove();
		});
	}


	$('#tambahSkill').click(function(){
		tambah();
	}); 

	$('#hapusSkill').click(function(){
		hapus();
	});

});

$(document).ready(function(){

	var total_member = 1;
	function tambah(){
		var n = total_member + 1;
		var isi = '<div id="tambahEducation'+total_member+'" style="display: none">';

		isi += '<hr>';

		isi += '<div class="row form-group"><div class="col col-md-3"><label for="education-input" class=" form-control-label">Education</label></div><div class="col-12 col-md-9"><input type="text" id="education-input" name="education-input'+name+'" placeholder="Education- '+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="from-education-input" class=" form-control-label">From</label></div><div class="col-12 col-md-9"><input type="text" id="from-education-input" name="from-education-input'+n+'" placeholder="From Education- '+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="date-first-education-input" class=" form-control-label">Date First</label></div><div class="col-12 col-md-9"><input type="date" id="date-first-education-input" name="date-first-education-input'+n+'" placeholder="Enter Date First'+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="date-last-education-input" class=" form-control-label">Date Last</label></div><div class="col-12 col-md-9"><input type="date" id="date-last-education-input" name="date-last-education-input'+n+'" placeholder="Enter Date Last'+n+'" class="form-control"></div></div>';

		isi += '</div>';
		$('#form-education').append(isi);
		$('#tambahEducation'+total_member).fadeIn('slow');

		total_member++;
	}

	function hapus(){
		total_member--;
		if(total_member <= 1){
			total_member = 1;
		}
		$('#tambahEducation'+total_member).fadeOut('slow',function(){
			$(this).remove();
		});
	}


	$('#tambahEducation').click(function(){
		tambah();
	}); 

	$('#hapusEducation').click(function(){
		hapus();
	}); 

});



$(document).ready(function(){

	var total_member = 1;
	function tambah(){
		var n = total_member + 1;
		var isi = '<div id="tambahExperience'+total_member+'" style="display: none">';

		isi += '<hr>';

		isi += '<div class="row form-group"><div class="col col-md-3"><label for="experiences-input" class=" form-control-label">Experiences</label></div><div class="col-12 col-md-9"><input type="text" id="experiences-input" name="experiences-input'+n+'" placeholder="Experiences- '+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="from-input" class=" form-control-label">From</label></div><div class="col-12 col-md-9"><input type="text" id="from-input" name="from-input'+n+'" placeholder="From Experiences- '+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="date-first-input" class=" form-control-label">Date First</label></div><div class="col-12 col-md-9"><input type="date" id="date-first-input" name="date-frist-input'+n+'" placeholder="Enter Date First'+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="date-last-input" class=" form-control-label">Date Last</label></div><div class="col-12 col-md-9"><input type="date" id="date-last-input" name="date-last-input'+n+'" placeholder="Enter Date Last'+n+'" class="form-control"></div></div>';

		isi += '</div>';
		$('#form-experience').append(isi);
		$('#tambahExperience'+total_member).fadeIn('slow');

		total_member++;
	}

	function hapus(){
		total_member--;
		if(total_member <= 1){
			total_member = 1;
		}
		$('#tambahExperience'+total_member).fadeOut('slow',function(){
			$(this).remove();
		});
	}


	$('#tambahExperience').click(function(){
		tambah();
	}); 

	$('#hapusExperience').click(function(){
		hapus();
	}); 

});


$(document).ready(function(){

	var total_member = 1;
	function tambah(){
		var n = total_member + 1;
		var isi = '<div id="tambahInterest'+total_member+'" style="display: none">';

		isi += '<hr>';

		isi += '<div class="row form-group"><div class="col col-md-3"><label for="interest-input" class=" form-control-label">Interest</label></div><div class="col-12 col-md-9"><textarea name="interest-input" id="interest-input'+n+'" rows="3" placeholder="Content...'+n+'" class="form-control"></textarea></div></div>';
		isi += '</div>';
		$('#form-interest').append(isi);
		$('#tambahInterest'+total_member).fadeIn('slow');

		total_member++;
	}

	function hapus(){
		total_member--;
		if(total_member <= 1){
			total_member = 1;
		}
		$('#tambahInterest'+total_member).fadeOut('slow',function(){
			$(this).remove();
		});
	}


	$('#tambahInterest').click(function(){
		tambah();
	}); 

	$('#hapusInterest').click(function(){
		hapus();
	}); 

});


$(document).ready(function(){

	var total_member = 1;
	function tambah(){
		var n = total_member + 1;
		var isi = '<div id="tambahAwards'+total_member+'" style="display: none">';

		isi += '<hr>';

		isi += '<div class="row form-group"><div class="col col-md-3"><label for="awards-input" class=" form-control-label">Awards</label></div><div class="col-12 col-md-9"><input type="text" id="awards-input" name="awards-input'+n+'" placeholder="Awards- '+n+'" class="form-control"></div></div><div class="row form-group"><div class="col col-md-3"><label for="descr-input" class=" form-control-label">Description</label></div><div class="col-12 col-md-9"><textarea name="descr-input'+n+'" id="descr-input" rows="3" placeholder="Content...'+n+'" class="form-control"></textarea></div></div><div class="row form-group"><div class="col col-md-3"><label for="icon-input" class=" form-control-label">Icon</label></div><div class="col-12 col-md-9"><input type="file" id="icon-input" name="icon-input" class="form-control-file"></div></div><div class="row form-group"><div class="col col-md-3"><label for="image-input" class=" form-control-label">Image</label></div><div class="col-12 col-md-9"><input type="file" id="image-input" name="image-input" class="form-control-file"></div></div>';
		isi += '</div>';
		$('#form-awards').append(isi);
		$('#tambahAwards'+total_member).fadeIn('slow');

		total_member++;
	}

	function hapus(){
		total_member--;
		if(total_member <= 1){
			total_member = 1;
		}
		$('#tambahAwards'+total_member).fadeOut('slow',function(){
			$(this).remove();
		});
	}


	$('#tambahAwards').click(function(){
		tambah();
	}); 

	$('#hapusAwards').click(function(){
		hapus();
	}); 

});