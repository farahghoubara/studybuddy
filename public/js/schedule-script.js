function addSubject() {
    // Now add subject fields
    var subjectFields = document.getElementById('subject_fields');
    var subjectCount = subjectFields.childElementCount;
    var subjectField = document.createElement('div');
    subjectField.classList.add('subject_field', 'mb-5', 'border', 'rounded', 'p-5');
    subjectField.style.backgroundColor = "#343a40"; /* Change background color to Bootstrap dark */
    subjectField.style.color = "white";
    subjectField.innerHTML = `
    <h4 class="text-center">Subject ${subjectCount + 1}</h4>
    <div class="form-group mb-3">
        <label for="subject_name">Subject Name</label>
        <input type="text" class="form-control" name="subjects[${subjectCount}][subject_name]" required>
    </div>
    <div class="form-group mb-3">
        <label for="credit_hours">Credit Hours</label>
        <select class="form-control selectpicker" name="subjects[${subjectCount}][credit_hours]" required>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="8">8</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label for="start_date">Start Date</label>
        <input type="date" class="form-control" name="subjects[${subjectCount}][start_date]" required>
    </div>
    <div class="form-group mb-3">
        <label for="end_date">End Date</label>
        <input type="date" class="form-control" name="subjects[${subjectCount}][end_date]" required>
    </div>
    <div class="form-group mb-3">
        <label for="lecture_days">Lecture Days</label>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Saturday"
                        name="subjects[${subjectCount}][lecture_days][]" id="flexCheckSaturday${subjectCount + 1}">
                    <label class="form-check-label" for="flexCheckSaturday${subjectCount + 1}">
                        Saturday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Sunday"
                        name="subjects[${subjectCount}][lecture_days][]" id="flexCheckSunday${subjectCount + 1}">
                    <label class="form-check-label" for="flexCheckSunday${subjectCount + 1}">
                        Sunday
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Monday"
                        name="subjects[${subjectCount}][lecture_days][]" id="flexCheckMonday${subjectCount + 1}">
                    <label class="form-check-label" for="flexCheckMonday${subjectCount + 1}">
                        Monday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Tuesday"
                        name="subjects[${subjectCount}][lecture_days][]" id="flexCheckTuesday${subjectCount + 1}">
                    <label class="form-check-label" for="flexCheckTuesday${subjectCount + 1}">
                        Tuesday
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Wednesday"
                        name="subjects[${subjectCount}][lecture_days][]" id="flexCheckWednesday${subjectCount + 1}">
                    <label class="form-check-label" for="flexCheckWednesday${subjectCount + 1}">
                        Wednesday
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Thursday"
                        name="subjects[${subjectCount}][lecture_days][]" id="flexCheckThursday${subjectCount + 1}">
                    <label class="form-check-label" for="flexCheckThursday${subjectCount + 1}">
                        Thursday
                    </label>
                </div>
            </div>
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="Friday"
                        name="subjects[${subjectCount}][lecture_days][]" id="flexCheckFriday${subjectCount + 1}">
                    <label class="form-check-label" for="flexCheckFriday${subjectCount + 1}">
                        Friday
                    </label>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-danger" onclick="deleteSubject(${subjectCount + 1})">Delete Subject</button>
    `;
    subjectFields.appendChild(subjectField);
}

function deleteSubject(index) {
    var subjectFields = document.getElementById('subject_fields');
    subjectFields.removeChild(subjectFields.childNodes[index]);
    updateDeleteButtons();
}

function updateDeleteButtons() {
    var subjectFields = document.getElementById('subject_fields');
    var subjects = subjectFields.getElementsByClassName('subject_field');
    for (var i = 1; i < subjects.length; i++) {
        subjects[i].querySelector('button').removeAttribute('disabled');
    }
}
