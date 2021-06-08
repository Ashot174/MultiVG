<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Article title" value="{{isset($article->title) ? $article->title : ""}}" required>


<label for="">Description</label>
<textarea class="form-control" name="description" id="description" required>{{isset($article->description) ? $article->description : ""}}</textarea>

<hr />

<input class="btn btn-primary" type="submit" value="Save">
