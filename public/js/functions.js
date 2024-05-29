function toggleAnswer(id) {
    const answerElement = document.getElementById('answer' + id);
    if (answerElement.style.display === 'none') {
        answerElement.style.display = 'block';
    } else {
        answerElement.style.display = 'none';
    }
}

function openAddPopup() {
    document.getElementById('addFaqPopup').style.display = 'block';
}

function closeAddPopup() {
    document.getElementById('addFaqPopup').style.display = 'none';
}

function openEditPopup(id, domanda, risposta) {
    document.getElementById('editFaqId').value = id;
    document.getElementById('editDomanda').value = domanda;
    document.getElementById('editRisposta').value = risposta;
    document.getElementById('editFaqPopup').style.display = 'block';
}

function closeEditPopup() {
    document.getElementById('editFaqPopup').style.display = 'none';
}
