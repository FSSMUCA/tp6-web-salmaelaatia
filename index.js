const form = document.getElementById("calc-form");
const erreur = document.getElementById("erreur");
const historique = document.getElementById("liste-historique");
const operations = [];

form.addEventListener("submit", function(e) {
  e.preventDefault();
  erreur.textContent = "";

  const a = parseFloat(document.getElementById("a").value);
  const b = parseFloat(document.getElementById("b").value);
  const op = document.getElementById("operation").value;

  if (isNaN(a) || isNaN(b)) {
    erreur.textContent = "Veuillez remplir tous les champs.";
    return;
  }

  if (op === "/" && b === 0) {
    erreur.textContent = "Division par zéro interdite.";
    return;
  }

  let resultat;
  switch(op) {
    case "+": resultat = a + b; break;
    case "-": resultat = a - b; break;
    case "*": resultat = a * b; break;
    case "/": resultat = a / b; break;
  }

  const ligne = `${a} ${op} ${b} = ${resultat}`;
  operations.push(ligne);

  const li = document.createElement("li");
  li.textContent = ligne;
  historique.appendChild(li);
});
