document.addEventListener("DOMContentLoaded", () => {

    const btnAbrir = document.querySelector("#btn-abrir");
    const modal = document.querySelector("#modal");
    const btnCerrar = document.querySelector("#cerrar-modal");
    const form = document.querySelector("#form-usuario");

    const tabla = document.querySelector("#tabla-usuarios");

    let usuarios = [
        { id: 1, nombre: "Daniela Ruiz", usuario: "druiz", rol: "Administrador", estado: "Activo" },
        { id: 2, nombre: "ANDRES", usuario: "sfdgfhj", rol: "Administrador", estado: "Activo" }
    ];

    let editando = false;

    // Mostrar tabla
    function cargarTabla() {
        tabla.innerHTML = "";
        usuarios.forEach(u => {
            tabla.innerHTML += `
                <tr>
                    <td>${u.id}</td>
                    <td>${u.nombre}</td>
                    <td>${u.usuario}</td>
                    <td>${u.rol}</td>
                    <td>${u.estado}</td>
                    <td>
                        <button class="btn-editar" onclick="editar(${u.id})">Editar</button>
                        <button class="btn-eliminar" onclick="eliminar(${u.id})">Eliminar</button>
                    </td>
                </tr>
            `;
        });
    }

    cargarTabla();

    // Abrir modal
    btnAbrir.onclick = () => {
        modal.style.display = "flex";
        form.reset();
        editando = false;
        document.querySelector("#modal-titulo").textContent = "Agregar Usuario";
    };

    // Cerrar modal
    btnCerrar.onclick = () => modal.style.display = "none";

    window.onclick = e => {
        if (e.target === modal) modal.style.display = "none";
    };

    // VALIDACIONES
    function soloLetras(texto) {
        return /^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]+$/.test(texto);
    }

    // Guardar
    form.onsubmit = e => {
        e.preventDefault();

        const id = document.querySelector("#usuario-id").value;
        const nombre = document.querySelector("#nombre").value.trim();
        const usuario = document.querySelector("#usuario").value.trim();
        const rol = document.querySelector("#rol").value;
        const estado = document.querySelector("#estado").value;

        if (!soloLetras(nombre)) {
            alert("El nombre solo puede contener letras.");
            return;
        }

        if (usuario.length < 3) {
            alert("El usuario debe tener al menos 3 caracteres.");
            return;
        }

        if (editando) {
            let index = usuarios.findIndex(u => u.id == id);

            usuarios[index] = { id: Number(id), nombre, usuario, rol, estado };

        } else {
            usuarios.push({
                id: usuarios.length + 1,
                nombre,
                usuario,
                rol,
                estado
            });
        }

        cargarTabla();
        modal.style.display = "none";
    };

    // Global para botón editar
    window.editar = id => {
        const u = usuarios.find(x => x.id === id);
        editando = true;

        document.querySelector("#modal-titulo").textContent = "Editar Usuario";

        document.querySelector("#usuario-id").value = u.id;
        document.querySelector("#nombre").value = u.nombre;
        document.querySelector("#usuario").value = u.usuario;
        document.querySelector("#rol").value = u.rol;
        document.querySelector("#estado").value = u.estado;

        modal.style.display = "flex";
    };

    // Global para eliminar
    window.eliminar = id => {
        if (confirm("¿Seguro que desea eliminar este usuario?")) {
            usuarios = usuarios.filter(u => u.id !== id);
            cargarTabla();
        }
    };
});
