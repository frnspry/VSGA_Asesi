function harga() {
  const harga2 = document.getElementById("harga2");
  var tempat=document.getElementById("tempat").value;

  let harga = 0;
  if (tempat == "Museum") {
      harga=10000;
      harga2.value=10000;
      document.getElementById("harga").innerText="Rp."+harga;

  } else if (tempat == 'Pantai') {
      harga=15000;
      harga2.value=15000;
      document.getElementById("harga").innerText="Rp."+harga;

  } else if (tempat == 'Taman Nasional') {
      harga=20000;
      harga2.value=15000;
      document.getElementById("harga").innerText="Rp."+harga;
  }
}

  function total() {
    var tempat=document.getElementById("tempat").value;

    let harga = 0;
    if (tempat == "Museum") {
        harga=10000;

    } else if (tempat == 'Pantai') {
        harga=15000;

    } else if (tempat == 'Taman Nasional') {
        harga=20000;

    }
    const dewasa = document.getElementById("dewasa");
    const anak = document.getElementById("anak");
    const total2 = document.getElementById("total2");

    dewasa1=Number(dewasa.value);
    anak1=Number(anak.value);

    let total=0;
    total=(dewasa1*harga)+(anak1*(harga/2));
    total2.value=(dewasa1*harga)+(anak1*(harga/2));
    document.getElementById("total").innerText="Rp."+total;
}

function validateForm() {
  if(document.forms["form"]["nama"].value==""){
    alert("Nama tidak boleh kosong!");
    document.forms["form"]["nama"].focus();
    return false;
  }
  if(document.forms["form"]["noid"].value==""){
    alert("Nomor Identitas tidak boleh kosong!");
    document.forms["form"]["noid"].focus();
    return false;
  }
  if(document.forms["form"]["nohp"].value==""){
    alert("Nomor HP tidak boleh kosong!");
    document.forms["form"]["nohp"].focus();
    return false;
  }
        if(document.forms["form"]["tempat"].value==""){
    alert("Tempat Wisata tidak boleh kosong!");
    document.forms["form"]["tempat"].focus();
    return false;
  }
        if(document.forms["form"]["tanggal"].value==""){
    alert("Tanggal Kunjungan tidak boleh kosong!");
    document.forms["form"]["tanggal"].focus();
    return false;
  }
        if(document.forms["form"]["dewasa"].value=="0"){
    alert("Pengunjung Dewasa tidak boleh kosong!");
    document.forms["form"]["dewasa"].focus();
    return false;
  }
        if(document.forms["form"]["total2"].value==0){
    alert("Mohon hitung total bayar terlebih dahulu!");
    document.forms["form"]["total2"].focus();
    return false;
  }
}