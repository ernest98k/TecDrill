<div class="form-group">
    <label for="inputName">Questão</label>
    <input type="text" class="form-control" name="question" id="inputQuestion" value="{{old('question',$faq->question)}}" />
</div>
<div class="form-group">
    <label for="inputSpecies">Resposta</label>
    <textarea class="form-control" name="answer" id="inputAnswer" value="{{old('answer',$faq->answer)}}"></textarea>
</div>
