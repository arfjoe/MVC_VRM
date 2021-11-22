// Vérification des mots de passes!!
function validation(f) {
    if (f.password.value == '' || f.passwordConfirm.value == '') {
      alert('Merci de remplir les deux champs mot de passe');
      f.password.focus();
      return false;
      }
     if (f.password.value != f.passwordConfirm.value) {
      alert('Ce ne sont pas les mêmes mots de passe!');
      f.password.focus();
      return false;
      }
    else if (f.password.value.trim == f.passwordConfirm.value.trim) {
      return true;
      }
    else {
      f.password.focus();
      return false;
      }
    }