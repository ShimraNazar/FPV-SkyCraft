/* -------------------------
   Demo cart badge (frontend)
-------------------------- */
const cartCountEl = document.getElementById("cartCount");
if (cartCountEl) {
  cartCountEl.textContent = "2";
}

/* -------------------------
   Helpers
-------------------------- */
function isEmail(v){ return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v); }
function setValid(el, ok){
  if(!el) return;
  el.classList.remove("is-valid","is-invalid");
  el.classList.add(ok ? "is-valid" : "is-invalid");
}

/* -------------------------
   Products filtering (products page)
-------------------------- */
function getParam(name){
  const url = new URL(window.location.href);
  return (url.searchParams.get(name) || "").trim();
}

function filterProducts(){
  const grid = document.getElementById("productGrid");
  if(!grid) return;

  const q = getParam("q").toLowerCase();
  const cat = getParam("category");

  const items = grid.querySelectorAll(".product-item");
  let shown = 0;

  items.forEach(item=>{
    const name = item.dataset.name || "";
    const category = item.dataset.category || "";

    let ok = true;

    if(cat && category !== cat) ok = false;
    if(q && !name.includes(q) && !category.toLowerCase().includes(q)) ok = false;

    item.classList.toggle("d-none", !ok);
    if(ok) shown++;
  });

  const rc = document.getElementById("resultCount");
  if(rc) rc.textContent = shown;
}

document.addEventListener("DOMContentLoaded", () => {
  filterProducts();
});

/* -------------------------
   Product Details 
-------------------------- */
const PRODUCT_DATA = {
  "lumenier-2307-johnnyfpv-v3-pro-cinematic-motor": {
    name: "Lumenier 2307 JohnnyFPV V3 Pro Cinematic Motor",
    category: "Motors",
    price: "13,950",
    img: "Lumenier 2307 motor.jpeg",
    desc: "High-torque cinematic motor designed for smooth throttle response and stable cruising.",
    specs: ["Stator: 2307", "Use: Cinematic / 5-inch", "Mount: 16x16", "Build: Durable"]
  },
  "iflight-xing2-2205-fpv-motor-2300kv-unibell": {
    name: "iFlight XING2 2205 FPV Motor - 2300KV (Unibell)",
    category: "Motors",
    price: "10,950",
    img: "iFlight XING2 2205 FPV Motor.jpeg",
    desc: "Efficient unibell motor for responsive freestyle control and strong punch.",
    specs: ["Stator: 2205", "KV: 2300KV", "Type: Unibell", "Use: Freestyle"]
  },
  "geprc-speedx2-1002-motor-no-plug": {
    name: "GEPRC SpeedX2 1002 Motor - No Plug - 18000KV/25000KV",
    category: "Motors",
    price: "6,950",
    img: "GEPRC SpeedX2 1002 Motor.jpeg",
    desc: "Micro motor option for lightweight builds with high KV performance.",
    specs: ["Stator: 1002", "KV: 18000/25000", "Plug: No Plug", "Use: Micro"]
  },
  "axisflying-blackbird-v4-2307-fpv-motor": {
    name: "Axisflying Blackbird V4 2307 FPV Motor",
    category: "Motors",
    price: "12,950",
    img: "Axisflying Blackbird V4 2307 FPV Motor.jpeg",
    desc: "Powerful motor built for aggressive freestyle and smooth mid-throttle.",
    specs: ["Stator: 2307", "Use: Freestyle", "Mount: 16x16", "Build: Strong"]
  },
  "axisflying-argus-eco-stack-f4-fc-60a-6s-4in1": {
    name: "Axisflying Argus ECO Stack - F4 FC + 60A 6S 4-in-1",
    category: "Stacks",
    price: "28,950",
    img: "Axisflying Argus ECO Stack.jpeg",
    desc: "Reliable F4 stack with 60A 6S ESC for stable flight and power handling.",
    specs: ["FC: F4", "ESC: 60A 6S", "Firmware: BLHeli_S", "Mount: 30x30"]
  },
  "geprc-taker-stack-f405-fc-50a-3-6s": {
    name: "GEPRC TAKER Stack - F405 FC+ 50A 3-6S",
    category: "Stacks",
    price: "27,950",
    img: "GEPRC TAKER Stack.jpeg",
    desc: "F405 stack with 50A ESC for balanced performance and reliability.",
    specs: ["FC: F405", "ESC: 50A", "Input: 3-6S", "Firmware: BLHeli_S"]
  },
  "radiomaster-tx15-max-radio-transmitter-elrs-2-4ghz": {
    name: "RadioMaster TX15 Max - ELRS 2.4GHz",
    category: "Radios",
    price: "74,950",
    img: "RadioMaster TX15 Max Radio Transmitter.jpeg",
    desc: "ELRS transmitter for excellent link quality and modern FPV control.",
    specs: ["Protocol: ELRS", "Band: 2.4GHz", "Type: Radio", "Brand: RadioMaster"]
  },
  "radiomaster-tx16s-mkii-max-pro-lumenier-elrs-2-4ghz": {
    name: "RadioMaster TX16S MKII MAX PRO - ELRS 2.4GHz",
    category: "Radios",
    price: "129,950",
    img: "RadioMaster TX16S MKII MAX PRO Radio Transmitter.jpeg",
    desc: "Premium transmitter with high precision control for advanced pilots.",
    specs: ["Protocol: ELRS", "Type: Pro Radio", "Edition: Lumenier", "Use: Advanced"]
  },
  "lumenier-qav-s-2-joshua-bardwell-se-5-frame-kit": {
    name: "Lumenier QAV-S 2 Joshua Bardwell SE 5” Frame Kit",
    category: "Frames",
    price: "34,950",
    img: "Lumenier QAV-S 2 Joshua Bardwell SE 5” Frame Kit.jpeg",
    desc: "Well-known 5-inch frame kit with strong layout and clean build space.",
    specs: ["Size: 5-inch", "Material: Carbon", "Edition: JB SE", "Type: Frame Kit"]
  },
  "lumenier-qav-pro-whoop-5-cinequads-edition-frame-kit": {
    name: "Lumenier QAV-PRO Whoop 5\" Cinequads Edition - Frame Kit",
    category: "Frames",
    price: "37,950",
    img: "Lumenier QAV-PRO Whoop 5 inch Cinequads Edition-Frame Kit.jpeg",
    desc: "Cinewhoop style frame kit for stable cinematic flights and protected props.",
    specs: ["Type: Cinewhoop", "Size: 5-inch", "Use: Cinematic", "Edition: Cinequads"]
  },
  "cnhl-black-series-100c-4s-lipo-battery-2000mah": {
    name: "CNHL Black Series 100C 4S LiPo Battery - 2000mAh",
    category: "Batteries",
    price: "18,950",
    img: "CNHL Black Series 100C 4S LiPo Battery.jpeg",
    desc: "High C rating battery for strong punch and consistent power delivery.",
    specs: ["Cell: 4S", "Capacity: 2000mAh", "C Rating: 100C", "Use: Freestyle"]
  },
  "xilo-1500mah-4s-100c-basher-lipo-battery-xt60-3-pack": {
    name: "XILO 1500mAh 4S 100c Basher LiPo Battery XT60 - 3 Pack Bundle",
    category: "Batteries",
    price: "32,950",
    img: "XILO 1500mAh 4S 100c Basher LiPo Battery XT60.jpeg",
    desc: "Value 3-pack bundle for practice and freestyle sessions.",
    specs: ["Cell: 4S", "Capacity: 1500mAh", "C Rating: 100C", "Connector: XT60"]
  },
  "gemfan-hurricane-51477-3-blade-propeller-set-of-4": {
    name: "Gemfan Hurricane Durable 51477 3-Blade Propeller (Set of 4)",
    category: "Propellers",
    price: "1,950",
    img: "Gemfan Hurricane Durable 51477 3-Blade Propelle.jpeg",
    desc: "Durable 3-blade props for strong grip and control.",
    specs: ["Type: 3-Blade", "Model: 51477", "Set: 4", "Use: Freestyle"]
  },
  "iflight-nazgul-t4030-2-blade-propeller-set-of-4": {
    name: "iFlight Nazgul T4030 2-Blade Propeller (Set of 4)",
    category: "Propellers",
    price: "1,750",
    img: "iFlight Nazgul T4030 2-Blade Propeller.jpeg",
    desc: "2-blade props for efficiency and smooth flight feel.",
    specs: ["Type: 2-Blade", "Model: T4030", "Set: 4", "Use: Efficiency"]
  },
  "dji-goggles-integra": {
    name: "DJI Goggles Integra",
    category: "Goggles",
    price: "169,950",
    img: "DJI Goggles Integra.jpeg",
    desc: "Comfortable DJI digital goggles option with immersive FPV viewing.",
    specs: ["Brand: DJI", "Type: Digital", "Use: FPV", "Comfort: High"]
  },
  "dji-goggles-n3-o4-air-unit-bundle": {
    name: "DJI Goggles N3 + O4 Air Unit Bundle",
    category: "Goggles",
    price: "239,950",
    img: "DJI Goggles N3 + O4 Air Unit Bundle.jpeg",
    desc: "Bundle for DJI digital FPV experience with compatible air unit.",
    specs: ["Bundle: Full Kit", "Brand: DJI", "Use: Digital FPV", "Setup: Complete"]
  },
  "dji-goggles-2": {
    name: "DJI Goggles 2",
    category: "Goggles",
    price: "199,950",
    img: "DJI Goggles 2.jpeg",
    desc: "Premium DJI goggles with sharp display and immersive experience.",
    specs: ["Brand: DJI", "Type: Digital", "Use: FPV", "Display: High clarity"]
  },
  "dji-o3-air-unit": {
    name: "DJI O3 Air Unit",
    category: "Video Systems",
    price: "139,950",
    img: "DJI O3 Air Unit.jpeg",
    desc: "Digital video transmission unit for high quality FPV feed and recording.",
    specs: ["Brand: DJI", "Type: Air Unit", "Use: Digital FPV", "Quality: HD"]
  }
};

function loadProductDetails(){
  const pdpWrap = document.getElementById("pdpWrap");
  if(!pdpWrap) return;

  const slug = window.location.pathname.split("/").pop();
  const p = PRODUCT_DATA[slug];

  const notFound = document.getElementById("pdpNotFound");
  if(!p){
    notFound.classList.remove("d-none");
    return;
  }

  document.getElementById("pdpName").textContent = p.name;
  document.getElementById("pdpCategory").textContent = p.category;
  document.getElementById("pdpPrice").textContent = p.price;
  document.getElementById("pdpDesc").textContent = p.desc;

  const img = document.getElementById("pdpImg");
  img.src = "/images/products/" + encodeURIComponent(p.img);

  const specsWrap = document.getElementById("pdpSpecs");
  specsWrap.innerHTML = "";
  p.specs.forEach(s=>{
    const col = document.createElement("div");
    col.className = "col-6";
    col.innerHTML = `<div class="spec-tile p-3"><div class="text-muted small">Spec</div><div class="fw-semibold">${s}</div></div>`;
    specsWrap.appendChild(col);
  });

  pdpWrap.classList.remove("d-none");
}

document.addEventListener("DOMContentLoaded", () => {
  loadProductDetails();
});

/* -------------------------
   Form validation and redirects
-------------------------- */
document.addEventListener("DOMContentLoaded", () => {

  const loginForm = document.getElementById("loginForm");
  if(loginForm){
    loginForm.addEventListener("submit",(e)=>{
      e.preventDefault();
      const email = document.getElementById("loginEmail");
      const pass = document.getElementById("loginPassword");

      const okEmail = isEmail(email.value.trim());
      const okPass = pass.value.trim().length >= 6;

      setValid(email, okEmail);
      setValid(pass, okPass);

      if(okEmail && okPass){
        // Simple frontend behavior:
        // If email contains "admin" -> admin dashboard, else user dashboard.
        if(email.value.toLowerCase().includes("admin")){
          window.location.href="/admin/dashboard";
        }else{
          window.location.href="/dashboard";
        }
      }
    });
  }

  const registerForm = document.getElementById("registerForm");
  if(registerForm){
    registerForm.addEventListener("submit",(e)=>{
      e.preventDefault();
      const f=document.getElementById("regFirst");
      const l=document.getElementById("regLast");
      const em=document.getElementById("regEmail");
      const p=document.getElementById("regPass");
      const c=document.getElementById("regConfirm");

      const okF=f.value.trim().length>0;
      const okL=l.value.trim().length>0;
      const okE=isEmail(em.value.trim());
      const okP=p.value.trim().length>=6;
      const okC=c.value.trim()===p.value.trim() && okP;

      setValid(f,okF); setValid(l,okL); setValid(em,okE); setValid(p,okP); setValid(c,okC);

      if(okF && okL && okE && okP && okC){
        window.location.href="/dashboard";
      }
    });
  }

  const contactForm = document.getElementById("contactForm");
  if(contactForm){
    contactForm.addEventListener("submit",(e)=>{
      e.preventDefault();
      const n=document.getElementById("cName");
      const em=document.getElementById("cEmail");
      const m=document.getElementById("cMsg");
      const okN=n.value.trim().length>1;
      const okE=isEmail(em.value.trim());
      const okM=m.value.trim().length>5;

      setValid(n,okN); setValid(em,okE); setValid(m,okM);

      if(okN && okE && okM){
        document.getElementById("contactSuccess").classList.remove("d-none");
        contactForm.reset();
      }
    });
  }

  // Admin forms (frontend only)
  const adminCreate = document.getElementById("adminCreateForm");
  if(adminCreate){
    adminCreate.addEventListener("submit",(e)=>{
      e.preventDefault();
      window.location.href="/admin/products";
    });
  }

  const adminEdit = document.getElementById("adminEditForm");
  if(adminEdit){
    adminEdit.addEventListener("submit",(e)=>{
      e.preventDefault();
      window.location.href="/admin/products";
    });
  }

});