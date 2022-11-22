module.exports = {
  content: ["./themes/fourcargo/assets/**/*.js", "./themes/fourcargo/**/*.htm"],
  theme: {
      // screens: {
      // },
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      fontSize: {
        "4/5xl": "2.50rem",
      },
      colors: {
        orange1: "#ff5a01",
        orange2: "#FF2901",
        semired: "#d40d0d",
        blueOld: "#18364a",
        grey: "#85898d",
        grey3: "#545454",
        grey2: "#726388",
        brown: "#635670",
        reds: "#ff1200",
      },
      backgroundImage: {
        "hero-pattern-home": "url('/src/image/Home/Faq/faq.jpeg')",
        "hero-pattern-why-choose-us": "url('/src/image/Home/Faq/faq.jpeg')",
        "linear-orange":
          "linear-gradient(269.29deg, #FF5A01 75.94%, rgba(255, 90, 1, 0) 100.1%);",
        "linear-orange2":
          "linear-gradient(180deg, rgba(255, 90, 1, 0) 50.69%, #FF5A01 80.58%)",
        "linear-semired":
          "linear-gradient(180deg, rgba(212, 13, 13, 0) 40%, #D40D0D 85%)",
        "linear-white":
          "linear-gradient(180deg, rgba(255, 255, 255, 0.19) 0%, #FFFFFF 120%)",
        "linear-text-orange":
          "linear-gradient(180deg, #FF2901 45.51%, rgba(255, 90, 1, 0.74) 90%) ",
        "hero-pattern":
          "linear-gradient(to right bottom, rgba('#7ed56f',0.8), rgba('#28b485',0.8)), url('/src/image/footer.jpg')",
        "category-product":
          "linear-gradient(180deg, rgba(0, 0, 0, 1.3%) 80.69%, rgba(0, 0, 0, 1.3%) 100.69%)",          
      },
      height: {
        45: "45rem",
        1000: "1000rem",
        97: "27rem",
      },
      width: {
        49: "45rem",
      },
      dropShadow: {
        "bar-header": "-50px 0 65px rgba(255, 90, 1, 0.25)",
      },
      boxShadow: {
        "btn-sh": "0 4px 3px rgba(0, 0, 0, 0.3)",
        "kategori-product": "inset -106px 0px 69px rgba(0, 0, 0, 0.08)",
      },
      zIndex: {
        1: "-1",
      },
      screens: {
        'tablets': {'max': '1023px'},
        'laptops': {'max': '1249px'},
        'tablets-mini': {'max': "767px"},
        'semi-tablets': {'max': '640px'},
        'phones': {'max': '435px'},
        'phones2': {'max': '380px'},

      }
    },
  },
  plugins: [],
};
