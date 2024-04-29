            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{_( $error )}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <label for="titre" class="form-label">Titre:</label>
            <input type="text" name="titre" id="titre" class="form-control">
            </div>
            <div>
            <label for="soustitre" class="form-label">Sous titre:</label>
            <input type="text" name="soustitre" id="soustitre" class="form-control">
            </div>
            <div>
            <label for="contenu" class="form-label">Contenu:</label>
            <input type="text" name="contenu" id="contenu" class="form-control">
            </div>
            <div>
            <label for="auteur" class="form-label">Auteur: </label>
            <input type="text" name="auteur" id="auteur" class="form-control">
            </div>
            <div>
            <label for="ecritle" class="form-label">Ecrit le:</label>
            <input type="date" name="ecritle" id="ecritle" class="form-control">
            </div>
            