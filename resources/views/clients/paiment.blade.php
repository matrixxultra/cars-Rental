<center><h1>Voici les votre Location Chez MyCar</h1></center>
<table border="1" width=100%>
    <tr>
        <th>Voiture</th>
        <th>Date_Debut</th>
        <th>Date_Fin</th>
        <th>Prix Total</th>
    </tr>
    <tr>
        <td>{{$data["voiture_marque"]}}{{$data["voiture_model"]}}</td>
        <td>{{$data["date_debut"]}}</td>
        <td>{{$data["date_fin"]}}</td>
        <td>{{$data["prix_total"]}} MAD</td>

    </tr>
</table>
