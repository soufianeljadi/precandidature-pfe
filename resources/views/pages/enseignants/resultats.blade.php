<table>
  <thead>
    <tr>
      <th>NO</th>
      <th>CODE MASSAR</th>
      <th>NOM</th>
      <th>PRENOM</th>
      <th>NOM ARABE</th>
      <th>PRENOM ARABE</th>
      <th>CIN</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($candidatures as $candidature)
      <tr>
        <td>{{ $candidature->etudiant->id }}</td>
        <td>{{ $candidature->etudiant->code_massar }}</td>
        <td>{{ $candidature->etudiant->nom }}</td>
        <td>{{ $candidature->etudiant->prenom }}</td>
        <td>{{ $candidature->etudiant->nom_ar }}</td>
        <td>{{ $candidature->etudiant->prenom_ar }}</td>
        <td>{{ $candidature->etudiant->cin }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
