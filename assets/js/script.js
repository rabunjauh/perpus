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
		
		
		if(add_row_button_id === 'btn_add_row_kelas'){
			new_td_input = new_tr.insertCell();
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
			new_td_input = new_tr.insertCell();
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
			new_td_input = new_tr.insertCell();
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
		}
}
// if(btn_add_row){
// 	btn_add_row.addEventListener('click', function(){
		
// 		new_tr = tbody.insertRow();
// 		new_tr.classList.add('tr_multiple');
// 		new_td_no = new_tr.insertCell();
// 		new_td_input = new_tr.insertCell();
// 		new_td_del = new_tr.insertCell();

// 		const input_baru = document.createElement('input');
// 		input_baru.setAttribute('type', 'text');
// 		input_baru.setAttribute('name', 'nama_pengarang[]');
// 		input_baru.setAttribute('required', '');
// 		input_baru.classList.add('form-control');
// 		input_baru.classList.add('form_nama_pengarang');
// 		input_baru.setAttribute('id', 'nama_pengarang');	
// 		input_baru.setAttribute('placeholder', 'Nama Pengarang');

// 		const btn_del_row = document.createElement('button');
// 		btn_del_row.setAttribute('type', 'button');
// 		btn_del_row.setAttribute('name', 'btn_del_row');
// 		btn_del_row.setAttribute('id', 'btn_del_row');
// 		btn_del_row.setAttribute('onclick', 'remove_del()');
// 		btn_del_row.classList.add('btn');
// 		btn_del_row.classList.add('btn-danger');
// 		btn_del_row.classList.add('btn_del');
// 		btn_del_row.innerHTML = 'Delete';

		
// 		new_td_no.innerHTML = new_tr.rowIndex;
// 		new_td_input.appendChild(input_baru);
// 		new_td_del.appendChild(btn_del_row);
// 	});
// }

// function hapus row table
function remove_del(){
	const tbody = document.getElementsByTagName('tbody')[0];
	tbody.deleteRow(-1);
}	

//ajax ambil data pengarang, penerbit, buku dan anggota untuk untuk
// jadi value input
// tidak pakai function
// const btn_cari = document.getElementById('cari_pengarang'); 
// if(btn_cari){	
// 	btn_cari.addEventListener('click', function(){
// 		let addr = 'http://localhost/perpus/data_pengarang/cari_pengarang';
// 		window.open(addr, '_blank', 'width=500, height=500, toolbar=yes, scrollbars=yes, top=150, left=500, resizable=yes');
// 	});
// }

// let row_klik = document.querySelectorAll('.table_row');
// for(let i = 0; i < row_klik.length; i++){
// 	row_klik[i].addEventListener('click', function(){
// 		let result_id = row_klik[i].dataset.id;	
// 		let result_name = row_klik[i].dataset.name;
// 		let nama_pengarang_val = window.opener.document.querySelector('.form_nama_pengarang');
// 		let id_pengarang_val = window.opener.document.querySelector('.form_id_pengarang');
// 		id_pengarang_val.value = result_id;
// 		nama_pengarang_val.value = result_name;
// 		window.close();
// 		// console.log(result);
// 	});
// }

function buka(addr){
	window.open(addr, '_blank', 'width=500, height=500, toolbar=no, menubar=no, scrollbars=yes, top=150, left=500, resizable=yes');
}
	


let row_klik = document.querySelectorAll('.table_row');
function kirim(id, desc){
	let result_id = row_klik[id].dataset.id;	
	let result_name = row_klik[id].dataset.name;
	if(desc == 'penerbit'){
		let id_val = window.opener.document.querySelector('.form_id_penerbit');
		let nama_val = window.opener.document.querySelector('.form_nama_penerbit');
		id_val.value = result_id;
		nama_val.value = result_name;
	}else if(desc == 'pengarang'){
		let id_val = window.opener.document.querySelector('.form_id_pengarang');
		let nama_val = window.opener.document.querySelector('.form_nama_pengarang');
		id_val.value = result_id;
		nama_val.value = result_name;
	}else{
		let id_val = window.opener.document.querySelector('.form_id_rak');
		let nama_val = window.opener.document.querySelector('.form_kode_rak');
		id_val.value = result_id;
		nama_val.value = result_name;
	}
	
	window.close();
}



// let row_klik = document.querySelectorAll('.table_row');
// for(let i = 0; i < row_klik.length; i++){
// 	row_klik[i].addEventListener('click', function(){
// 		let result_id = row_klik[i].dataset.id;	
// 		let result_name = row_klik[i].dataset.name;
// 		if()
// 		let id_pengarang_val = window.opener.document.querySelector('.form_id_pengarang');
// 		let nama_pengarang_val = window.opener.document.querySelector('.form_nama_pengarang');
// 		id_pengarang_val.value = result_id;
// 		nama_pengarang_val.value = result_name;
// 		window.close();
// 		// console.log(result);
// 	});
// }

function preview(){
	let reader = new FileReader();
	reader.onload = function(){
		let output = document.getElementById('output_image');
		output.src = reader.result;
	}
	reader.readAsDataURL(event.target.files[0]);
}



	




 
