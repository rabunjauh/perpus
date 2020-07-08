// $(function () { 
//     $("[data-toggle='tooltip']").tooltip(); 
// });
// tambah baris tabel yg berisi input dan tombol delete
const btn_add_row = document.getElementById('btn_add_row');
const tbody = document.getElementsByTagName('tbody')[0];
// function add_row argument nya diambil dari button add_row tiap2 form
function add_row(add_row_button_id){
	new_tr = tbody.insertRow();
	new_tr.classList.add('tr_multiple');
	new_td_no = new_tr.insertCell();
	new_td_input = new_tr.insertCell();
	new_td_del = new_tr.insertCell();
		
	if(add_row_button_id === 'btn_add_row_kelas'){
		const input_baru = document.createElement('input');
		input_baru.setAttribute('type', 'text');
		input_baru.setAttribute('name', 'kelas[]');
		input_baru.setAttribute('required', '');
		input_baru.classList.add('form-control');
		input_baru.classList.add('form_kelas');
		input_baru.setAttribute('id', 'kelas');	
		input_baru.setAttribute('placeholder', 'Kelas');
		
		const btn_del_row = document.createElement('button');
		btn_del_row.setAttribute('type', 'button');
		btn_del_row.setAttribute('name', 'btn_del_row');
		btn_del_row.setAttribute('id', 'btn_del_row');
		btn_del_row.setAttribute('onclick', 'remove_del()');
		btn_del_row.classList.add('btn');
		btn_del_row.classList.add('btn-danger');
		btn_del_row.classList.add('btn_del');
		btn_del_row.innerHTML = 'Delete';

		
		new_td_no.innerHTML = new_tr.rowIndex;
		new_td_input.appendChild(input_baru);
		new_td_del.appendChild(btn_del_row);
	}else if(add_row_button_id === 'btn_add_row_pengarang'){
		const input_baru = document.createElement('input');
		input_baru.setAttribute('type', 'text');
		input_baru.setAttribute('name', 'nama_pengarang[]');
		input_baru.setAttribute('required', '');
		input_baru.classList.add('form-control');
		input_baru.classList.add('form_nama_pengarang');
		input_baru.setAttribute('id', 'nama_pengarang');	
		input_baru.setAttribute('placeholder', 'Nama Pengarang');

		const btn_del_row = document.createElement('button');
		btn_del_row.setAttribute('type', 'button');
		btn_del_row.setAttribute('name', 'btn_del_row');
		btn_del_row.setAttribute('id', 'btn_del_row');
		btn_del_row.setAttribute('onclick', 'remove_del()');
		btn_del_row.classList.add('btn');
		btn_del_row.classList.add('btn-danger');
		btn_del_row.classList.add('btn_del');
		btn_del_row.innerHTML = 'Delete';

		
		new_td_no.innerHTML = new_tr.rowIndex;
		new_td_input.appendChild(input_baru);
		new_td_del.appendChild(btn_del_row);
	}else if(add_row_button_id === 'btn_add_row_jurusan'){
		const input_baru = document.createElement('input');
		input_baru.setAttribute('type', 'text');
		input_baru.setAttribute('name', 'jurusan[]');
		input_baru.setAttribute('required', '');
		input_baru.classList.add('form-control');
		input_baru.classList.add('form_jurusan');
		input_baru.setAttribute('id', 'Jurusan');	
		input_baru.setAttribute('placeholder', 'Jurusan');

		const btn_del_row = document.createElement('button');
		btn_del_row.setAttribute('type', 'button');
		btn_del_row.setAttribute('name', 'btn_del_row');
		btn_del_row.setAttribute('id', 'btn_del_row');
		btn_del_row.setAttribute('onclick', 'remove_del()');
		btn_del_row.classList.add('btn');
		btn_del_row.classList.add('btn-danger');
		btn_del_row.classList.add('btn_del');
		btn_del_row.innerHTML = 'Delete';

		
		new_td_no.innerHTML = new_tr.rowIndex;
		new_td_input.appendChild(input_baru);
		new_td_del.appendChild(btn_del_row);
	}else if(add_row_button_id === 'btn_add_row_penerbit'){
		const input_baru = document.createElement('input');
		input_baru.setAttribute('type', 'text');
		input_baru.setAttribute('name', 'nama_penerbit[]');
		input_baru.setAttribute('required', '');
		input_baru.classList.add('form-control');
		input_baru.classList.add('form_nama_penerbit');
		input_baru.setAttribute('id', 'nama_penerbit');	
		input_baru.setAttribute('placeholder', 'Nama Penerbit');

		const btn_del_row = document.createElement('button');
		btn_del_row.setAttribute('type', 'button');
		btn_del_row.setAttribute('name', 'btn_del_row');
		btn_del_row.setAttribute('id', 'btn_del_row');
		btn_del_row.setAttribute('onclick', 'remove_del()');
		btn_del_row.classList.add('btn');
		btn_del_row.classList.add('btn-danger');
		btn_del_row.classList.add('btn_del');
		btn_del_row.innerHTML = 'Delete';

		
		new_td_no.innerHTML = new_tr.rowIndex;
		new_td_input.appendChild(input_baru);
		new_td_del.appendChild(btn_del_row);
	}else if(add_row_button_id === 'btn_add_row_rak'){
		const input_baru = document.createElement('input');
		input_baru.setAttribute('type', 'text');
		input_baru.setAttribute('name', 'kode_rak[]');
		input_baru.setAttribute('required', '');
		input_baru.classList.add('form-control');
		input_baru.classList.add('form_kode_rak');
		input_baru.setAttribute('id', 'kode_rak');	
		input_baru.setAttribute('placeholder', 'Kode Rak');

		const btn_del_row = document.createElement('button');
		btn_del_row.setAttribute('type', 'button');
		btn_del_row.setAttribute('name', 'btn_del_row');
		btn_del_row.setAttribute('id', 'btn_del_row');
		btn_del_row.setAttribute('onclick', 'remove_del()');
		btn_del_row.classList.add('btn');
		btn_del_row.classList.add('btn-danger');
		btn_del_row.classList.add('btn_del');
		btn_del_row.innerHTML = 'Delete';

		
		new_td_no.innerHTML = new_tr.rowIndex;
		new_td_input.appendChild(input_baru);
		new_td_del.appendChild(btn_del_row);
	}
}

// function hapus row table
function remove_del(){
	const tbody = document.getElementsByTagName('tbody')[0];
	tbody.deleteRow(-1);
}	


function buka(addr){
	window.open(addr, '_blank', 'width=900, height=500, toolbar=no, menubar=no, scrollbars=yes, top=120, left=220, resizable=yes');
}

$(document).ready(function(){
	$(".btn_del").click(function(){
	    if(confirm("Apakah anda yakin akan menghapus data ini?")){
	        return true;
	    }
	    else{
	        return false;
	    }
	});

	$(".btn_back").click(function(){
	    if(confirm("Apakah anda ingin kembali ke halaman sebelumnya?")){
	        return true;
	    }
	    else{
	        return false;
	    }
	});

	$(".btn_reset").click(function(){
	    if(confirm("Apakah anda yakin akan melakukan reset form?")){
	        return true;
	    }
	    else{
	        return false;
	    }
	});



	$('.table_row_anggota').click(function(){
		let id_anggota = $(this).attr('data-id');
		let nama_anggota = $(this).attr('data-name');
		let id_val = window.opener.document.querySelector('.form_id_anggota');
		let nama_val = window.opener.document.querySelector('.form_nama_anggota');
		id_val.value = id_anggota;
		nama_val.value = nama_anggota;
		window.close();
	})


	$('.table_row_buku').click(function(){
		let id_buku = $(this).attr('data-id_buku');
		let kode_buku = $(this).attr('data-kode_buku');
		let judul_buku = $(this).attr('data-judul_buku');


		// $(window.opener.document).find('#tbody_form_pinjam_buku').insertRow();
		// new_tr = tbody.insertRow();
		new_tr_pinjam_buku = window.opener.document.getElementById('tbody_form_pinjam_buku').insertRow();
		new_tr_pinjam_buku.classList.add('tr_multiple');
		new_td_no_pinjam_buku = new_tr_pinjam_buku.insertCell();
		new_td_kode_buku_pinjam_buku = new_tr_pinjam_buku.insertCell();
		new_td_judul_buku_pinjam_buku = new_tr_pinjam_buku.insertCell();
		new_td_input_pinjam_buku = new_tr_pinjam_buku.insertCell();
		new_td_del_pinjam_buku = new_tr_pinjam_buku.insertCell();

		const input_jumlah_pinjam_buku = document.createElement('input');
		input_jumlah_pinjam_buku.setAttribute('type', 'text');
		input_jumlah_pinjam_buku.setAttribute('name', 'jumlah_buku[]');
		input_jumlah_pinjam_buku.setAttribute('required', '');
		input_jumlah_pinjam_buku.classList.add('form-control');
		input_jumlah_pinjam_buku.classList.add('form_jumlah_buku');
		input_jumlah_pinjam_buku.setAttribute('id', 'jumlah_buku');	
		input_jumlah_pinjam_buku.setAttribute('placeholder', 'Jumlah Buku');
		
		const btn_del_row_pinjam_buku = document.createElement('button');
		btn_del_row_pinjam_buku.setAttribute('type', 'button');
		btn_del_row_pinjam_buku.setAttribute('name', 'btn_del_row_pinjam_buku');
		btn_del_row_pinjam_buku.setAttribute('id', 'btn_del_row_pinjam_buku');
		btn_del_row_pinjam_buku.setAttribute('onclick', 'remove_del()');
		btn_del_row_pinjam_buku.classList.add('btn');
		btn_del_row_pinjam_buku.classList.add('btn-danger');
		btn_del_row_pinjam_buku.classList.add('btn_del');
		btn_del_row_pinjam_buku.innerHTML = 'Delete';
		
		new_td_no_pinjam_buku.innerHTML = new_tr_pinjam_buku.rowIndex;
		new_td_kode_buku_pinjam_buku.innerText = kode_buku;
		new_td_judul_buku_pinjam_buku.innerText = judul_buku;
		new_td_input_pinjam_buku.appendChild(input_jumlah_pinjam_buku);
		new_td_del_pinjam_buku.appendChild(btn_del_row_pinjam_buku);

		const input_id_buku = document.createElement('input');
		input_id_buku.setAttribute('type', 'hidden');
		input_id_buku.setAttribute('name', 'id_buku[]');
		input_id_buku.setAttribute('value', id_buku);
		input_id_buku.classList.add('form-control');
		input_id_buku.classList.add('form_id_buku');
		input_id_buku.setAttribute('id', 'id_buku');

		new_td_input_pinjam_buku.appendChild(input_id_buku);

		// const input_id_buku = $(window.opener.document).find('#input_id');
		// input_baru.setAttribute('type', 'hidden');
		// input_baru.setAttribute('name', 'id_buku[]');
		// input_baru.setAttribute('required', '');
		// input_baru.classList.add('form-control');
		// input_baru.classList.add('form_id_buku');
		// input_baru.setAttribute('id', 'id_buku');


		// let td_kode_buku = window.opener.document.getElementById('kode_buku');
		// let td_judul_buku = window.opener.document.getElementById('judul_buku');
		// tbody_form_pinjam_buku.innerHTML = '<tr><td>1</td><td>' + kode_buku + '</td></tr>';
		// $(window.opener.document).find('#input_id').append('<tr></tr>');
		// const new_tr = $(window.opener.document).find('#tbody_form_pinjam_buku').append('<tr></tr>');
		// const td_no = new_tr.append('<td>1</td>');
		// const td_kode_buku = new_tr.append('<td>' + kode_buku + '</td>');
		// const td_judul_buku = new_tr.append('<td>' + judul_buku + '</td>');
		// const td_input_jumlah_buku = new_tr.append('<td></td>');
		// const td_hapus_row = new_tr.append('<td></td>');
		// $(window.opener.document).find('#tbody_form_pinjam_buku').append('<tr><td>1</td><td>' + kode_buku + '</td><td>' + judul_buku + '</td></tr>');
		// let id_val = window.opener.document.querySelector('.form_id_anggota');
		// let nama_val = window.opener.document.querySelector('.form_nama_anggota');
		// id_val.value = id_anggota;
		// nama_val.value = nama_anggota;
		// td_kode_buku.innerHTML = kode_buku;
		// td_judul_buku.innerHTML = judul_buku;
		// window.close();
	})

	$('.table_row_pengarang').click(function(){
		let id_pengarang = $(this).attr('data-id');
		let nama_pengarang = $(this).attr('data-name');
		let id_val = window.opener.document.querySelector('.form_id_pengarang');
		let nama_val = window.opener.document.querySelector('.form_nama_pengarang');
		id_val.value = id_pengarang;
		nama_val.value = nama_pengarang;
		window.close();
	})	

	$('.table_row_penerbit').click(function(){
		let id_penerbit = $(this).attr('data-id');
		let nama_penerbit = $(this).attr('data-name');
		let id_val = window.opener.document.querySelector('.form_id_penerbit');
		let nama_val = window.opener.document.querySelector('.form_nama_penerbit');
		id_val.value = id_penerbit;
		nama_val.value = nama_penerbit;
		window.close();
	})

	$('.table_row_rak').click(function(){
		let id_rak = $(this).attr('data-id');
		let nama_rak = $(this).attr('data-name');
		let id_val = window.opener.document.querySelector('.form_id_rak');
		let nama_val = window.opener.document.querySelector('.form_kode_rak');
		id_val.value = id_rak;
		nama_val.value = nama_rak;
		window.close();
	})	


	$('#button_tambah_peminjaman_buku').click(function(e){
		let jum_max_pinjam = $(this).attr('data-max_pinjam');

		let arr_jml_buku = [];
		$('.form_jumlah_buku').each(function(index, obj){
			arr_jml_buku.push($(obj).val());
		})
		let arr_jml_buku_int = arr_jml_buku.map(Number);	
		let total_jml = 0;
		for (i = 0; i < arr_jml_buku_int.length; i++){
			total_jml += arr_jml_buku_int[i];
		}

		if (total_jml > jum_max_pinjam){
			alert('Maksimal peminjaman ' + jum_max_pinjam +' eksemplar!');
			e.preventDefault(e);
		}

	})

	function push_arr(){
		$('.form_jumlah_buku').each(function(index, obj){
			arr_jml_buku.push($(obj).val());		
		})	
	}
})

function preview(){
	let reader = new FileReader();
	reader.onload = function(){
		let output = document.getElementById('output_image');
		output.src = reader.result;
	}
	reader.readAsDataURL(event.target.files[0]);
}

$(document).ready(function(){
	$("#coba").click(function(){
		$("#tes").append("<p>tes</p>");	
	});
});


	




 
