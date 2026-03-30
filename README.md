# 3DDDH
3D Diagnostic Data Hub
----------------------------
3DDDH is a lightweight, web-based platform for **integrating, visualising, and sharing multi-source diagnostic data** within an **interactive 3D environment**. The platform enables cultural heritage practitioners, researchers, and diagnostics experts to organise, annotate, and explore analytical results directly on 3D models.  

3DDDH by [Visual Computing Laboratory](http://vcg.isti.cnr.it) - ISTI - CNR

---

## 🚀 Key Features

- **Web-based, no installation needed**  
  Runs in any modern browser; compatible across devices and operating systems.

- **Interactive 3D viewer**  
  Powered by open-source technologies (3DHOP + Nexus), supporting high-resolution, multiresolution 3D models.

- **Diagnostic hotspots**  
  Add, remove, customise, and position sampling points directly on the 3D surface.

- **Template-driven data management**  
  Diagnostic records are generated automatically from human-readable JSON templates that define structure, fields, and visualisation logic.

- **Integrated data entry and visualisation**  
  Record forms and data viewers are created dynamically from templates – no code changes needed.

- **Sharing & collaboration**  
  Save, export, re-load, or share diagnostic setups using view-only links.


---

## 🧩 JSON Template System

Diagnostic analyses are defined using **modular JSON templates**, allowing the platform to:

- dynamically generate data-entry forms  
- enforce field types and structures  
- render visualisation panels coherently  
- allow domain experts to extend functionality without touching code  

Templates can include:  
✅ text fields  
✅ tables  
✅ images  
✅ downloads  
✅ grouped sections  
✅ technique-specific metadata  

---

## 🖥️ Live Demo

A demonstration video of the platform in action is available here:

👉 **[https://youtu.be/8bDGNxZw4sg]**

---

## 🛠️ Installation & Usage

The platform is **static** and can be deployed on a web server supporting **HTTP Range Requests** (needed for multiresolution 3D streaming) **and PHP** (for saving/loading diagnostic data).

### ✅ Recommended setup (Apache + PHP via XAMPP/MAMP/WAMP)
1. Install **XAMPP** (or **MAMP/WAMP** depending on your OS) and start the **Apache** service.
2. Clone the repository in inside the server’s document root:
```bash
cd xampp\htdocs
git clone https://github.com/cnr-isti-vclab/3DDDH.git
```
4. Visit:
```bash
http://localhost/3DDDH/
```

---

## 🤝 Contributing

Contributions are welcome!  
If you plan to submit pull requests or propose extensions (e.g., new JSON templates, new UI components, new annotation tools), please open an issue first to discuss your ideas.

---

## 📄 License

This project is released under the **MIT License**.  
See the `LICENSE` file for details.

---

## 🏛️ Acknowledgements

This work has been developed within the project:

**CHANGES – Cultural Heritage Active Innovation for Next‑Gen Sustainable Society**  
PNRR – Mission 4 – Component 2 – Investment 1.3  
Funded by the European Union – NextGenerationEU

---

## 📬 Contact

For questions, collaborations, or technical support:

**marco.potenziani@isti.cnr.it**  
