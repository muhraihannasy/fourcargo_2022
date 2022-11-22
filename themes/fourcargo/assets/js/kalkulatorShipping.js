
    // Button Submit 
    const btnSubmit = document.getElementById("submit");
 
    // Button Country
    const btnChina = document.getElementById("china");
    const btnThailand = document.getElementById("thailand");
    const btnTaiwan = document.getElementById("taiwan");
    const btnKorea = document.getElementById("korea");
    const btnHongkong = document.getElementById("hongkong");
    const btnSingapura = document.getElementById("singapura");
    let jalurPengirimanContainer =  document.querySelector(".jalur-pengiriman");

    // Active
    let chinaActive = false;
    let taiwanActive = false;
    let thailandActive = false;
    let koreaActive = false;
    let singapuraActive = false;
    let hongkongActive = false;

    // Input
    const kategoriBarang = document.getElementById("kategori");
    const berat = document.querySelector("#berat");
    const volume = document.querySelector("#volume");
    const panjang = document.querySelector("#panjang");
    const lebar = document.querySelector("#lebar");
    const tinggi = document.querySelector("#tinggi");

    const jalurPengiriman = [
      {
        id: 'via_laut',
        name: "Via Laut",
        status: true,
      },
      {
        id: 'via_udara',
        name: "Via Udara",
        status: true,
      },
    ]

    const dataKategoriBarang = [
      {
        name: "Tas & Ikat Pinggang", 
        price: 4500000,
      },
      {
        name: "Barang Umum / General Cargo",
        price: 5000000,
      },
      {
        name: "Barang Lartas Biasa", 
        price: 5500000,
      },
      {
        name: "Semi Garment", 
        price: 6500000,
      },
      {
        name: "Lartas Berat", 
        price: 6500000,
      },
      {
        name: "Hot Item", 
        price: 7000000,
      },
      {
        name: "Garment", 
        price: 7000000,
      },
    ]

    const hitungPengiriman = {
      jalur: "",
      priceJalur: 0,
      priceKategoriBarang: 0,
      berat: 0,
      panjang: 0,
      lebar: 0,
      tinggi: 0,
    }
    // Default

    // btnThailand.classList.add('active')
    renderKategoriBarang(dataKategoriBarang)

    // Render
    function renderKategoriBarang(barang) {
      barang.forEach((item) => {
        kategoriBarang.innerHTML += `
           <option value="${item.name}">${item.name}</option>
        `;
      });
    }

    function renderJalurPengiriman(dataPengiriman) {

      jalurPengirimanContainer.innerHTML = "";

      for (let i = 0; i < dataPengiriman.length; i++) {
        if(dataPengiriman[i].status) {
          jalurPengirimanContainer.innerHTML += `
                  <div class="flex gap-2 items-center">
                            <input type="radio" name="pengiriman" id="${dataPengiriman[i].id}" value="${dataPengiriman[i].name}" />
                            <label for="${dataPengiriman[i].id}">${dataPengiriman[i].name}</label>
                  </div>
          `;
        } 
      }
    }

    btnChina.addEventListener('click', (e) => {

        const pengirimanChina = [
          ...jalurPengiriman
        ];

        const hitungPengirimanChina = {
          ...hitungPengiriman
        };

        pengirimanChina.forEach((e) => {
          if(e.name == "Via Udara") {
            e.status = true;
          }

          if(e.name == "Via Laut") {
            e.status = true;
          }
        });
        
        renderJalurPengiriman(pengirimanChina);

        const viaLaut = document.getElementById('via_laut');
        const viaUdara = document.getElementById('via_udara');

        // Jalur Pengiriman

        viaUdara.addEventListener('change', () => {
          hitungPengirimanChina.jalur = "Via Udara";
          hitungPengirimanChina.priceJalur = 235000;

          berat.removeAttribute("disabled");
          tinggi.setAttribute("disabled", '')
          panjang.setAttribute("disabled", '')
          lebar.setAttribute("disabled", '')

          checkHarga(hitungPengirimanChina)
        });

        viaLaut.addEventListener('change', () => {
          hitungPengirimanChina.jalur = "Via Laut";
          hitungPengirimanChina.negara = "China";

          tinggi.removeAttribute("disabled", '')
          panjang.removeAttribute("disabled", '')
          lebar.removeAttribute("disabled", '')
          berat.setAttribute("disabled", '')

          checkHarga(hitungPengirimanChina)
        });

        // Input Kategori Barang

        kategoriBarang.addEventListener('change', (e) => {
          dataKategoriBarang.forEach((barang) => {
            if(barang.name == e.target.value) {
              hitungPengirimanChina.priceKategoriBarang = barang.price;
            }


          }); 
        
          checkHarga(hitungPengirimanChina)
        });

        // Input Berat

        berat.addEventListener("keyup", (e) => {
          hitungPengirimanChina.berat = e.target.value;
          checkHarga(hitungPengirimanChina)

        });

        // Input Panjang

        panjang.addEventListener("keyup", (e) => {
          hitungPengirimanChina.panjang = e.target.value;
          checkHarga(hitungPengirimanChina)
        });

        // Input Lebar

        lebar.addEventListener("keyup", (e) => {
          hitungPengirimanChina.lebar = e.target.value;
          checkHarga(hitungPengirimanChina)
        });

        // Input Tinggi

        tinggi.addEventListener("keyup", (e) => {
          hitungPengirimanChina.tinggi = e.target.value;
          checkHarga(hitungPengirimanChina)
        });

        btnChina.classList.add('active');
        btnThailand.classList.remove('active');
        btnTaiwan.classList.remove('active');
        btnKorea.classList.remove('active');
        btnSingapura.classList.remove('active');
        btnHongkong.classList.remove('active');

        // Reset
        panjang.value = 0;
        lebar.value = 0;
        tinggi.value = 0;
      });
      

    btnThailand.addEventListener('click', (e) => {
      taiwanActive = false;
      koreaActive = false;
      hongkongActive = false;
      singapuraActive = false;
      chinaActive = false;
      thailandActive = true;

      const pengirimanThailand = [
        ...jalurPengiriman
      ];

      const hitungPengirimanThailand = {
        ...hitungPengiriman
      };

      pengirimanThailand.forEach((e) => {
          if(e.name == "Via Udara") {
            e.status = true;
          }

          if(e.name == "Via Laut") {
            e.status = true;
          }
      });

      renderJalurPengiriman(pengirimanThailand);
      
      const viaLaut = document.getElementById('via_laut');
      const viaUdara = document.getElementById('via_udara');

      // Jalur Pengiriman

      viaUdara.addEventListener('change', () => {
        hitungPengirimanThailand.jalur = "Via Udara";
        hitungPengirimanThailand.negara = "Thailand";
        hitungPengirimanThailand.priceJalur = 235000;

        berat.removeAttribute("disabled");
        tinggi.setAttribute("disabled", '')
        panjang.setAttribute("disabled", '')
        lebar.setAttribute("disabled", '')

        checkHarga(hitungPengirimanThailand)
      });

      viaLaut.addEventListener('change', () => {
        hitungPengirimanThailand.jalur = "Via Laut";
        hitungPengirimanThailand.priceJalur = 12300000;

        tinggi.removeAttribute("disabled", '')
        panjang.removeAttribute("disabled", '')
        lebar.removeAttribute("disabled", '')
        berat.setAttribute("disabled", '')

        checkHarga(hitungPengirimanThailand)
      });
    
      // Input Kategori Barang

      kategoriBarang.addEventListener('change', (e) => {
    
         checkHarga(hitungPengirimanThailand)
      });

      // Input Berat

      berat.addEventListener("keyup", (e) => {
          hitungPengirimanThailand.berat = e.target.value;

          if(thailandActive) {
            return (hitungPengirimanThailand.berat >= 1 || hitungPengirimanThailand.berat == "") ? checkHarga(hitungPengirimanThailand) : alert("Minimal 1KG Untuk Negara Thailand");
          }
      });

      // Input Panjang

      panjang.addEventListener("keyup", (e) => {
        hitungPengirimanThailand.panjang = e.target.value;
         checkHarga(hitungPengirimanThailand)
      });

      // Input Lebar

      lebar.addEventListener("keyup", (e) => {
        hitungPengirimanThailand.lebar = e.target.value;
         checkHarga(hitungPengirimanThailand)
      });

      // Input Tinggi

      tinggi.addEventListener("keyup", (e) => {
        hitungPengirimanThailand.tinggi = e.target.value;
         checkHarga(hitungPengirimanThailand)
      });      
      
      btnChina.classList.remove('active');
      btnThailand.classList.add('active');
      btnTaiwan.classList.remove('active');
      btnKorea.classList.remove('active');
      btnSingapura.classList.remove('active');
      btnHongkong.classList.remove('active');

      // Reset
      panjang.value = 0;
      lebar.value = 0;
      tinggi.value = 0;
      berat.value = 0;
    });

    btnTaiwan.addEventListener('click', (e) => {
      koreaActive = false;
      hongkongActive = false;
      singapuraActive = false;
      chinaActive = false;
      thailandActive = false;
      taiwanActive = true;

    const pengirimanTaiwan = [
      ...jalurPengiriman
    ];

    const hitungPengirimanTaiwan = {
      ...hitungPengiriman
    };

    pengirimanTaiwan.forEach((e) => {
      if(e.name == "Via Udara") {
        e.status = true;
      }

      if(e.name == "Via Laut") {
        e.status = true;
      }
    });


    renderJalurPengiriman(pengirimanTaiwan);

    const viaLaut = document.getElementById('via_laut');
    const viaUdara = document.getElementById('via_udara');

    // Jalur Pengiriman

    viaUdara.addEventListener('change', () => {
      hitungPengirimanTaiwan.jalur = "Via Udara";
      hitungPengirimanTaiwan.negara = "Taiwan";
      hitungPengirimanTaiwan.priceJalur = 245000;

      berat.removeAttribute("disabled");
      tinggi.setAttribute("disabled", '')
      panjang.setAttribute("disabled", '')
      lebar.setAttribute("disabled", '')

      checkHarga(hitungPengirimanTaiwan)
    });

    viaLaut.addEventListener('change', () => {
      hitungPengirimanTaiwan.jalur = "Via Laut";
      hitungPengirimanTaiwan.priceJalur = 12000000;

      tinggi.removeAttribute("disabled", '')
      panjang.removeAttribute("disabled", '')
      lebar.removeAttribute("disabled", '')
      berat.setAttribute("disabled", '')

      checkHarga(hitungPengirimanTaiwan)
    });

    // Input Kategori Barang

    kategoriBarang.addEventListener('change', (e) => {
      checkHarga(hitungPengirimanTaiwan)
    });

    // Input Berat

    berat.addEventListener("keyup", (e) => {
        hitungPengirimanTaiwan.berat = e.target.value;
    
        if(taiwanActive) {
          return (hitungPengirimanTaiwan.berat >= 3 || hitungPengirimanTaiwan.berat == "") ? checkHarga(hitungPengirimanTaiwan) : alert("Minimal 3KG Untuk Negara Taiwan");
        }
      
    });

    // Input Panjang

    panjang.addEventListener("keyup", (e) => {
      hitungPengirimanTaiwan.panjang = e.target.value;
      checkHarga(hitungPengirimanTaiwan)
    });

    // Input Lebar

    lebar.addEventListener("keyup", (e) => {
      hitungPengirimanTaiwan.lebar = e.target.value;
      checkHarga(hitungPengirimanTaiwan)
    });

    // Input Tinggi

    tinggi.addEventListener("keyup", (e) => {
      hitungPengirimanTaiwan.tinggi = e.target.value;
      checkHarga(hitungPengirimanTaiwan)
    });      

    btnChina.classList.remove('active');
    btnThailand.classList.remove('active');
    btnTaiwan.classList.add('active');
    btnKorea.classList.remove('active');
    btnSingapura.classList.remove('active');
    btnHongkong.classList.remove('active');


    // Reset
    panjang.value = 0;
    lebar.value = 0;
    tinggi.value = 0;
    berat.value = 0;
    });

    btnKorea.addEventListener('click', (e) => {
    hongkongActive = false;
    singapuraActive = false;
    chinaActive = false;
    thailandActive = false;
    taiwanActive = false;
    koreaActive = true;
    
    const pengirimanKorea = [
      ...jalurPengiriman
    ];

    const hitungPengirimanKorea = {
      ...hitungPengiriman
    };

    pengirimanKorea.forEach((e) => {
      if (e.name == "Via Udara") {
        e.status = true;
      }

      if(e.name == "Via Laut") {
        e.status = false;
      }
    });

    renderJalurPengiriman(pengirimanKorea);

    const viaLaut = document.getElementById('via_laut');
    const viaUdara = document.getElementById('via_udara');

    // Jalur Pengiriman

    viaUdara.addEventListener('change', () => {
      hitungPengirimanKorea.jalur = "Via Udara";
      hitungPengirimanKorea.negara = "Korea";
      hitungPengirimanKorea.priceJalur = 255000;

      berat.removeAttribute("disabled");
      tinggi.setAttribute("disabled", '')
      panjang.setAttribute("disabled", '')
      lebar.setAttribute("disabled", '')

      checkHarga(hitungPengirimanKorea)
    });

    // viaLaut.addEventListener('change', () => {
    //   hitungPengirimanKorea.jalur = "Via Laut";
    //   hitungPengirimanKorea.priceJalur = 12000000;

    //   tinggi.removeAttribute("disabled", '')
    //   panjang.removeAttribute("disabled", '')
    //   lebar.removeAttribute("disabled", '')
    //   berat.setAttribute("disabled", '')

    //   checkHarga(hitungPengirimanKorea)
    // });

    // Input Kategori Barang

    kategoriBarang.addEventListener('change', (e) => {
      checkHarga(hitungPengirimanKorea)
    });

    // Input Berat

    berat.addEventListener("keyup", (e) => {
          hitungPengirimanKorea.berat = e.target.value;

          if(koreaActive) {
            return (hitungPengirimanKorea.berat >= 1 || hitungPengirimanKorea.berat == "") ? checkHarga(hitungPengirimanKorea) : alert("Minimal 1KG Untuk Negara Korea");
          }
          
    });

    // Input Panjang

    panjang.addEventListener("keyup", (e) => {
      hitungPengirimanKorea.panjang = e.target.value;
      checkHarga(hitungPengirimanKorea)
    });

    // Input Lebar

    lebar.addEventListener("keyup", (e) => {
      hitungPengirimanKorea.lebar = e.target.value;
      checkHarga(hitungPengirimanKorea)
    });

    // Input Tinggi

    tinggi.addEventListener("keyup", (e) => {
      hitungPengirimanKorea.tinggi = e.target.value;
      checkHarga(hitungPengirimanKorea)
    });      

    btnChina.classList.remove('active');
    btnThailand.classList.remove('active');
    btnTaiwan.classList.remove('active');
    btnKorea.classList.add('active');
    btnSingapura.classList.remove('active');
    btnHongkong.classList.remove('active');

    // Reset
    panjang.value = 0;
    lebar.value = 0;
    tinggi.value = 0;
    berat.value = 0;
    });

    btnSingapura.addEventListener('click', (e) => {
      koreaActive = false;
      hongkongActive = false;
      singapuraActive = true;
      chinaActive = false;
      thailandActive = false;
      taiwanActive = false;

    const pengirimanSingapura = [
      ...jalurPengiriman
    ];

    const hitungPengirimanSingapura = {
      ...hitungPengiriman
    };

    pengirimanSingapura.forEach((e) => {
      if(e.name == "Via Udara") {
        e.status = true;
      }

      if(e.name == "Via Laut") {
        e.status = true;
      }
    });


    renderJalurPengiriman(pengirimanSingapura);

    const viaLaut = document.getElementById('via_laut');
    const viaUdara = document.getElementById('via_udara');

    // Jalur Pengiriman

    viaUdara.addEventListener('change', () => {
      hitungPengirimanSingapura.jalur = "Via Udara";
      hitungPengirimanSingapura.negara = "Singapura";
      hitungPengirimanSingapura.priceJalur = 195000;

      berat.removeAttribute("disabled");
      tinggi.setAttribute("disabled", '')
      panjang.setAttribute("disabled", '')
      lebar.setAttribute("disabled", '')

      checkHarga(hitungPengirimanSingapura)
    });

    viaLaut.addEventListener('change', () => {
      hitungPengirimanSingapura.jalur = "Via Laut";
      hitungPengirimanSingapura.priceJalur = 10500000;

      tinggi.removeAttribute("disabled", '')
      panjang.removeAttribute("disabled", '')
      lebar.removeAttribute("disabled", '')
      berat.setAttribute("disabled", '')

      checkHarga(hitungPengirimanSingapura)
    });

    // Input Kategori Barang

    kategoriBarang.addEventListener('change', (e) => {
      checkHarga(hitungPengirimanSingapura)
    });

    // Input Berat

    berat.addEventListener("keyup", (e) => {
        hitungPengirimanSingapura.berat = e.target.value;
    
        if(singapuraActive) {
          return (hitungPengirimanSingapura.berat >= 3 || hitungPengirimanSingapura.berat == "") ? checkHarga(hitungPengirimanSingapura) : alert("Minimal 3KG Untuk Negara Singapura");
        }
      
    });

    // Input Panjang

    panjang.addEventListener("keyup", (e) => {
      hitungPengirimanSingapura.panjang = e.target.value;
      checkHarga(hitungPengirimanSingapura)
    });

    // Input Lebar

    lebar.addEventListener("keyup", (e) => {
      hitungPengirimanSingapura.lebar = e.target.value;
      checkHarga(hitungPengirimanSingapura)
    });

    // Input Tinggi

    tinggi.addEventListener("keyup", (e) => {
      hitungPengirimanSingapura.tinggi = e.target.value;
      checkHarga(hitungPengirimanSingapura)
    });      

    btnChina.classList.remove('active');
    btnThailand.classList.remove('active');
    btnTaiwan.classList.remove('active');
    btnKorea.classList.remove('active');
    btnSingapura.classList.add('active');
    btnHongkong.classList.remove('active');


    // Reset
    panjang.value = 0;
    lebar.value = 0;
    tinggi.value = 0;
    berat.value = 0;
    });

    btnHongkong.addEventListener('click', (e) => {
      koreaActive = false;
      hongkongActive = true;
      singapuraActive = false;
      chinaActive = false;
      thailandActive = false;
      taiwanActive = false;

    const pengirimanHongkong = [
      ...jalurPengiriman
    ];

    const hitungPengirimanHongkong = {
      ...hitungPengiriman
    };

    pengirimanHongkong.forEach((e) => {
      if(e.name == "Via Udara") {
        e.status = true;
      }

      if(e.name == "Via Laut") {
        e.status = true;
      }
    });


    renderJalurPengiriman(pengirimanHongkong);

    const viaLaut = document.getElementById('via_laut');
    const viaUdara = document.getElementById('via_udara');

    // Jalur Pengiriman

    viaUdara.addEventListener('change', () => {
      hitungPengirimanHongkong.jalur = "Via Udara";
      hitungPengirimanHongkong.negara = "Hongkong";
      hitungPengirimanHongkong.priceJalur = 255000;

      berat.removeAttribute("disabled");
      tinggi.setAttribute("disabled", '')
      panjang.setAttribute("disabled", '')
      lebar.setAttribute("disabled", '')

      checkHarga(hitungPengirimanHongkong)
    });

    viaLaut.addEventListener('change', () => {
      hitungPengirimanHongkong.jalur = "Via Laut";
      hitungPengirimanHongkong.priceJalur = 14500000;

      tinggi.removeAttribute("disabled", '')
      panjang.removeAttribute("disabled", '')
      lebar.removeAttribute("disabled", '')
      berat.setAttribute("disabled", '')

      checkHarga(hitungPengirimanHongkong)
    });

    // Input Kategori Barang

    kategoriBarang.addEventListener('change', (e) => {
      checkHarga(hitungPengirimanHongkong)
    });

    // Input Berat

    berat.addEventListener("keyup", (e) => {
        hitungPengirimanHongkong.berat = e.target.value;
    
        if(hongkongActive) {
          return (hitungPengirimanHongkong.berat >= 5 || hitungPengirimanHongkong.berat == "") ? checkHarga(hitungPengirimanHongkong) : alert("Minimal 5KG Untuk Negara Hongkong");
        }
      
    });

    // Input Panjang

    panjang.addEventListener("keyup", (e) => {
      hitungPengirimanHongkong.panjang = e.target.value;
      checkHarga(hitungPengirimanHongkong)
    });

    // Input Lebar

    lebar.addEventListener("keyup", (e) => {
      hitungPengirimanHongkong.lebar = e.target.value;
      checkHarga(hitungPengirimanHongkong)
    });

    // Input Tinggi

    tinggi.addEventListener("keyup", (e) => {
      hitungPengirimanHongkong.tinggi = e.target.value;
      checkHarga(hitungPengirimanHongkong)
    });      

    btnChina.classList.remove('active');
    btnThailand.classList.remove('active');
    btnTaiwan.classList.remove('active');
    btnKorea.classList.remove('active');
    btnSingapura.classList.remove('active');
    btnHongkong.classList.add('active');


    // Reset
    panjang.value = 0;
    lebar.value = 0;
    tinggi.value = 0;
    berat.value = 0;
    });

    btnSubmit.addEventListener("click", (e) => {
        e.preventDefault();
    });



    function checkHarga(value) {
      const estimasiHarga = document.getElementById("estimasi-harga");
      let totalVolume;
      let totalHarga; 

      if(value.priceKategoriBarang == "") {
        value.priceKategoriBarang = 4500000;
      }

      if(value.jalur  == "Via Udara") {
          totalHarga = value.berat * value.priceJalur;
      }

      if(value.jalur  == "Via Laut") {
         totalVolume = value.panjang * value.lebar * value.tinggi / 1000000;

         switch(value.negara) {
           case "China":
            totalHarga = totalVolume * value.priceKategoriBarang;
            break;
            default:
            totalHarga = totalVolume * value.priceJalur;
            break;
         }
         
         volume.value = totalVolume;
      }
      
      if(totalHarga == NaN) {
        totalHarga = 0;
      }

      let formatterIDR = new Intl.NumberFormat(['ban', 'id']).format(totalHarga)

      btnSubmit.addEventListener("click", (e) => {
        e.preventDefault();       
        estimasiHarga.textContent = `Rp. ${formatterIDR}`

      });
      
    }

    const viaLaut = document.getElementById('via_laut');
    const viaUdara = document.getElementById('via_udara');
    const viaUdaras = document.getElementById('via_udara');

     viaUdara.addEventListener('click', () => {
        alert("Silahkan Pilih Negara Terlebih Dahulu")
      });


      viaLaut.addEventListener('click', () => {
        alert("Silahkan Pilih Negara Terlebih Dahulu")
      });

    volume.setAttribute("disabled", '')