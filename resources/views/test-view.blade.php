@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <h4>Components</h4>
                    </div>
                    <div class="card-body">
                        <x-dc-form route="/">
                            <x-dc-input-field 
                                :field-value="old('value', optional($user ?? null)->value)" 
                                field-name="value" 
                                label-name="Input Text Field"
                            />   
                            <x-dc-select-field 
                                :field-value="old('value', optional($user ?? null)->value)" 
                                field-name="value" 
                                :data-array="$array_data"
                                label-name="Select field"
                            />     
                            <x-dc-text-area 
                                :field-value="old('value', optional($user ?? null)->value)" 
                                field-name="value" 
                                label-name="Text Area"
                            />        
                            <x-dc-input-field-addon
                                :field-value="old('value', optional($user ?? null)->value)" 
                                field-name="value" 
                                label-name="Addon Input"
                                button-action="CREATE"
                            />  
                        </x-dc-form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection