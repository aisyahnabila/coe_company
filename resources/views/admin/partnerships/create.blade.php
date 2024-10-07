@extends('admin.layouts.app')

@section('admin-content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Partnership</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('partnerships.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <!-- Title Field -->
                            <div class="form-group">
                                <label for="title">Partnerships Name</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ old('title') }}" required>
                            </div>

                            <!-- Status Field -->
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="Submit" {{ old('status') == 'Submit' ? 'selected' : '' }}>Submit</option>
                                    <option value="Aktif" {{ old('status') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                    <option value="Batal" {{ old('status') == 'Batal' ? 'selected' : '' }}>Batal</option>
                                </select>
                            </div>

                            <!-- Collaboration Type Field -->
                            <div class="form-group">
                                <label for="collaboration_type">Collaboration Type</label>
                                <select class="form-control" id="collaboration_type" name="collaboration_type" required>
                                    <option value="Dalam_Negeri"
                                        {{ old('collaboration_type') == 'Dalam_Negeri' ? 'selected' : '' }}>
                                        Kolaborasi Dalam Negeri (DN)
                                    </option>
                                    <option value="Luar_Negeri"
                                        {{ old('collaboration_type') == 'Luar_Negeri' ? 'selected' : '' }}>
                                        Kolaborasi Luar Negeri (LN)
                                    </option>
                                </select>
                            </div>

                            <!-- Funder Field -->
                            <div class="form-group">
                                <label for="funder">Funder</label>
                                <input type="text" class="form-control" id="funder" name="funder"
                                    value="{{ old('funder') }}" required>
                            </div>

                            <!-- Schema Field -->
                            <div class="form-group">
                                <label for="schema">Schema</label>
                                <input type="text" class="form-control" id="schema" name="schema"
                                    value="{{ old('schema') }}" required>
                            </div>

                            <!-- Team Field -->
                            <div class="form-group">
                                <label for="team">Team</label>
                                <textarea class="form-control" id="team" name="team" rows="3" required>{{ old('team') }}</textarea>
                            </div>

                            <!-- Fund Amount Field -->
                            <div class="form-group">
                                <label for="fund_amoung">Fund Amount</label>
                                <input type="number" class="form-control" id="fund_amoung" name="fund_amoung"
                                    value="{{ old('fund_amoung') }}" required>
                            </div>

                            <!-- Fund Currency Field -->
                            <div class="form-group">
                                <label for="fund_currency">Fund Currency</label>
                                <input type="text" class="form-control" id="fund_currency" name="fund_currency"
                                    value="{{ old('fund_currency') }}" required>
                            </div>

                            <!-- Start Date Field -->
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input type="date" class="form-control" id="start_date" name="start_date"
                                    value="{{ old('start_date') }}">
                            </div>

                            <!-- End Date Field -->
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date"
                                    value="{{ old('end_date') }}">
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group text-right">
                                <button type="submit" class="btn btn-primary">Create Partnership</button>
                                <a href="{{ route('partnerships.index') }}" class="btn btn-secondary">Cancel</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
