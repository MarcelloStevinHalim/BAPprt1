<div class="form-group {{ $errors->has('studentID') ? 'has-error' : ''}}">
    <label for="studentID" class="control-label">{{ 'Studentid' }}</label>
    <input class="form-control" name="studentID" type="text" id="studentID" value="{{ isset($mahasiswa2->studentID) ? $mahasiswa2->studentID : ''}}" >
    {!! $errors->first('studentID', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    <label for="nama" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama" type="text" id="nama" value="{{ isset($mahasiswa2->nama) ? $mahasiswa2->nama : ''}}" >
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jurusan') ? 'has-error' : ''}}">
    <label for="jurusan" class="control-label">{{ 'Jurusan' }}</label>
    <textarea class="form-control" rows="5" name="jurusan" type="textarea" id="jurusan" >{{ isset($mahasiswa2->jurusan) ? $mahasiswa2->jurusan : ''}}</textarea>
    {!! $errors->first('jurusan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tahunMasuk') ? 'has-error' : ''}}">
    <label for="tahunMasuk" class="control-label">{{ 'Tahunmasuk' }}</label>
    <input class="form-control" name="tahunMasuk" type="text" id="tahunMasuk" value="{{ isset($mahasiswa2->tahunMasuk) ? $mahasiswa2->tahunMasuk : ''}}" >
    {!! $errors->first('tahunMasuk', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
