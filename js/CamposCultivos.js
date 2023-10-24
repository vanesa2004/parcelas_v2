document.getElementById("agregar_cultivo").addEventListener("click", function () {
    var cultivoDiv = document.createElement("div");
    cultivoDiv.className = "cultivo-ed";
    cultivoDiv.innerHTML = `
        <div class="campo-cultivo">
            <label for="cultivo[]">Cultivo:</label>
            <input type="text" name="cultivo[]" required>
        </div>
        <div class="campo-cultivo">
            <label for="siembra[]">Fecha de Siembra:</label>
            <input type="date" name="siembra[]" required>
        </div>
        <div class="campo-cultivo">
            <label for="cosecha[]">Fecha de Cosecha:</label>
            <input type="date" name="cosecha[]" required>
        </div>`;
    
    document.getElementById("cultivos").appendChild(cultivoDiv);
});
