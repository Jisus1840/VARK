
const formulario1 = () => {
    let ext1 = document.getElementById('ext1').value;
    let int1 = document.getElementById('int1');
    let ext2 = document.getElementById('ext2').value;
    let int2 = document.getElementById('int2');
    let ext3 = document.getElementById('ext3').value;
    let int3 = document.getElementById('int3');
    let ext4 = document.getElementById('ext4').value;
    let int4 = document.getElementById('int4');
    let ext5 = document.getElementById('ext5').value;
    let int5 = document.getElementById('int5');
    let ext6 = document.getElementById('ext6').value;
    let int6 = document.getElementById('int6');
    let ext7 = document.getElementById('ext7').value;
    let int7 = document.getElementById('int7');
    let ext8 = document.getElementById('ext8').value;
    let int8 = document.getElementById('int8');
    let ext9 = document.getElementById('ext9').value;
    let int9 = document.getElementById('int9');
    let ext10 = document.getElementById('ext10');
    let int10 = document.getElementById('int10');

    let totalExtrovertido = parseInt(ext1) + parseInt(ext2) + parseInt(ext3) + parseInt(ext4) + parseInt(ext5) + parseInt(ext6) + parseInt(ext7) + parseInt(ext8) + parseInt(ext9)
    ext10.value = totalExtrovertido;

    int1.value = 10 - ext1
    int2.value = 10 - ext2
    int3.value = 10 - ext3
    int4.value = 10 - ext4
    int5.value = 10 - ext5
    int6.value = 10 - ext6
    int7.value = 10 - ext7
    int8.value = 10 - ext8
    int9.value = 10 - ext9

    int10.value = 90 - totalExtrovertido;
}

const formulario2 = () => {
    let sen1 = document.getElementById('sen1').value;
    let intu1 = document.getElementById('intu1');
    let sen2 = document.getElementById('sen2').value;
    let intu2 = document.getElementById('intu2');
    let sen3 = document.getElementById('sen3').value;
    let intu3 = document.getElementById('intu3');
    let sen4 = document.getElementById('sen4').value;
    let intu4 = document.getElementById('intu4');
    let sen5 = document.getElementById('sen5').value;
    let intu5 = document.getElementById('intu5');
    let sen6 = document.getElementById('sen6').value;
    let intu6 = document.getElementById('intu6');
    let sen7 = document.getElementById('sen7').value;
    let intu7 = document.getElementById('intu7');
    let sen8 = document.getElementById('sen8').value;
    let intu8 = document.getElementById('intu8');
    let sen9 = document.getElementById('sen9').value;
    let intu9 = document.getElementById('intu9');
    let sen10 = document.getElementById('sen10');
    let intu10 = document.getElementById('intu10');

    let totalSensorial = parseInt(sen1) + parseInt(sen2) + parseInt(sen3) + parseInt(sen4) + parseInt(sen5) + parseInt(sen6) + parseInt(sen7) + parseInt(sen8) + parseInt(sen9)
    sen10.value = totalSensorial;

    intu1.value = 10 - sen1
    intu2.value = 10 - sen2
    intu3.value = 10 - sen3
    intu4.value = 10 - sen4
    intu5.value = 10 - sen5
    intu6.value = 10 - sen6
    intu7.value = 10 - sen7
    intu8.value = 10 - sen8
    intu9.value = 10 - sen9

    intu10.value = 90 - totalSensorial;
}

const formulario3 = () => {
    let rac1 = document.getElementById('rac1').value;
    let emo1 = document.getElementById('emo1');
    let rac2 = document.getElementById('rac2').value;
    let emo2 = document.getElementById('emo2');
    let rac3 = document.getElementById('rac3').value;
    let emo3 = document.getElementById('emo3');
    let rac4 = document.getElementById('rac4').value;
    let emo4 = document.getElementById('emo4');
    let rac5 = document.getElementById('rac5').value;
    let emo5 = document.getElementById('emo5');
    let rac6 = document.getElementById('rac6').value;
    let emo6 = document.getElementById('emo6');
    let rac7 = document.getElementById('rac7').value;
    let emo7 = document.getElementById('emo7');
    let rac8 = document.getElementById('rac8').value;
    let emo8 = document.getElementById('emo8');
    let rac9 = document.getElementById('rac9').value;
    let emo9 = document.getElementById('emo9');
    let rac10 = document.getElementById('rac10');
    let emo10 = document.getElementById('emo10');

    let totalRacional = parseInt(rac1) + parseInt(rac2) + parseInt(rac3) + parseInt(rac4) + parseInt(rac5) + parseInt(rac6) + parseInt(rac7) + parseInt(rac8) + parseInt(rac9)
    rac10.value = totalRacional;

    emo1.value = 10 - rac1
    emo2.value = 10 - rac2
    emo3.value = 10 - rac3
    emo4.value = 10 - rac4
    emo5.value = 10 - rac5
    emo6.value = 10 - rac6
    emo7.value = 10 - rac7
    emo8.value = 10 - rac8
    emo9.value = 10 - rac9

    emo10.value = 90 - totalRacional;
}

const formulario4 = () => {
    let cal1 = document.getElementById('cal1').value;
    let per1 = document.getElementById('per1');
    let cal2 = document.getElementById('cal2').value;
    let per2 = document.getElementById('per2');
    let cal3 = document.getElementById('cal3').value;
    let per3 = document.getElementById('per3');
    let cal4 = document.getElementById('cal4').value;
    let per4 = document.getElementById('per4');
    let cal5 = document.getElementById('cal5').value;
    let per5 = document.getElementById('per5');
    let cal6 = document.getElementById('cal6').value;
    let per6 = document.getElementById('per6');
    let cal7 = document.getElementById('cal7').value;
    let per7 = document.getElementById('per7');
    let cal8 = document.getElementById('cal8').value;
    let per8 = document.getElementById('per8');
    let cal9 = document.getElementById('cal9').value;
    let per9 = document.getElementById('per9');
    let cal10 = document.getElementById('cal10');
    let per10 = document.getElementById('per10');

    let totalCalificador = parseInt(cal1) + parseInt(cal2) + parseInt(cal3) + parseInt(cal4) + parseInt(cal5) + parseInt(cal6) + parseInt(cal7) + parseInt(cal8) + parseInt(cal9)
    cal10.value = totalCalificador;

    per1.value = 10 - cal1
    per2.value = 10 - cal2
    per3.value = 10 - cal3
    per4.value = 10 - cal4
    per5.value = 10 - cal5
    per6.value = 10 - cal6
    per7.value = 10 - cal7
    per8.value = 10 - cal8
    per9.value = 10 - cal9

    per10.value = 90 - totalCalificador;
}
