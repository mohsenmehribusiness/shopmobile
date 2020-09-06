
<!--
                        <div class="col-lg-5">
                            <label>Multiple (no virtualScroll)</label>
                            <select multiple class="selectpicker form-control" id="number-multiple" data-container="body" data-live-search="true" title="Select a number" data-hide-disabled="true" data-actions-box="true" data-virtual-scroll="false">
                                <option value="1">1</option>
                                <option value="2">3</option>
                                <option value="3">2</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" style="padding-right:6px;">نام دسته جدید</label>
                                <input class="form-control" name="name" id="name" type="text" value="{{old('name')}}" required>
                            </div>
                        </div>
                        @foreach($category as $categorya)
                            <input type="checkbox" name="{{$categorya->id}}" value="{{$categorya->id}}" checked>{{$categorya->name}}<br>
                        @endforeach

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cat_id" style="padding-right:6px;">انتخاب دسته</label>
                                <select id='cat_id'  multiple>
                                    @foreach($category as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <script>
                                document.multiselect('#cat_id');
                            </script>
                        </div>
                        -->
