<!-- Modal -->
<div class="modal fade" id="showMyComplaintModal" tabindex="-1" aria-labelledby="showMyComplaintModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">Filled Complaint</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form class="form-group row g-3" method="post" id="showMyComplaintForm" enctype="multipart/form-data">
					{{ csrf_field() }}
          <input type="hidden" id="show_mycomplaint_id">
          <div class="d-inline-flex p-2 justify-content-end">
            <div class="">
              <select id="show_mycomplaint_status" name="status" class="form-select" disabled>
                <option value="pending">Pending</option>
                <option value="scheduled first hearing">Scheduled first hearing</option>
                <option value="on going">On going</option>
                <option value="settled">Settled</option>
              </select>
            </div>
          </div>
					<div class="col-sm-12">
						<label for="complainantName" class="form-label">Complainant's Name (Buong pangalan ng nagrereklamo) :</label>
						<input type="text" class="form-control" id="show_mycomplaint_complainantName" name="complainantName" readonly>
					</div>
					<div class="col-sm-12">
						<label for="complainantAddress" class="form-label">Complainant's Address (Address ng nagrereklamo) :</label>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="show_mycomplaint_cAddressno" name="cAddressno" disabled>
					</div>
					<div class="col-sm-8">
						<select id="show_mycomplaint_cStreet" name="cStreet" class="form-select" disabled>
							<option value="1st Ave.">1st Ave.</option>
							<option value="10th Ave.">10th Ave.</option>
							<option value="10th St.">10th St.</option>
							<option value="11th Ave.">11th Ave.</option>
							<option value="11th St.">11th St.</option>
							<option value="2nd Ave.">2nd Ave.</option>
							<option value="3rd Ave.">3rd Ave.</option>
							<option value="4th Ave.">4th Ave.</option>
							<option value="4th St.">4th St.</option>
							<option value="5th Ave.">5th Ave.</option>
							<option value="5th St.">5th St.</option>
							<option value="6th Ave.">6th Ave.</option>
							<option value="6th St.">6th St.</option>
							<option value="7th Ave.">7th Ave.</option>
							<option value="7th St.">7th St.</option>
							<option value="8th Ave.">8th Ave.</option>
							<option value="8th St.">8th St.</option>
							<option value="9th Ave.">9th Ave.</option>
							<option value="9th St.">9th St.</option>
							<option value="Aguho St.">Aguho St.</option>
							<option value="Anonas St.">Anonas St.</option>
							<option value="Atis St.">Atis St.</option>
							<option value="Balimbing Ext.">Balimbing Ext.</option>
							<option value="Balimbing St.">Balimbing St.</option>
							<option value="Bravo St.">Bravo St.</option>
							<option value="Chesa St.">Chesa St.<option>
							<option value="Chico St.">Chico St.</option>
							<option value="Durian Ext.">Durian Ext.</option>
							<option value="Durian St.">Durian St.</option>
							<option value="Guiho St.">Guiho St.</option>
							<option value="Guyabano St.">Guyabano St.</option>
							<option value="Ilang-ilang St.">Ilang-ilang St.</option>
							<option value="Ipil-ipil St.">Ipil-ipil St.</option>
							<option value="Kaimito St.">Kaimito St.</option>
							<option value="Kasoy St.">Kasoy St.</option>
							<option value="Karamay St.">Karamay St.</option>
							<option value="Kawayan St..">Kawayan St..</option>
							<option value="Langka St.">Langka St.</option>
							<option value="Mabolo Ext.">Mabolo Ext.</option>
							<option value="Mabolo St.">Mabolo St.</option>
							<option value="Macopa Ext.">Macopa Ext.</option>
							<option value="Macopa St.">Macopa St.</option>
							<option value="Mangga St.">Mangga St.</option>
							<option value="Mangustan St.">Mangustan St.</option>
							<option value="Mansanas St.">Mansanas St.</option>
							<option value="Marang St.">Marang St.</option>
							<option value="Molave St.">Molave St.</option>
							<option value="Narra St.">Narra St.</option>
							<option value="Pajo St.">Pajo St.</option>
							<option value="Papaya Ext.">Papaya Ext.</option>
							<option value="Pili St.">Pili St.</option>
							<option value="Salamat Ext.">Salamat Ext.</option>
							<option value="Sampaguita St.">Sampaguita St.</option>
							<option value="Sampaloc Ext.">Sampaloc Ext.</option>
							<option value="Sampaloc St.">Sampaloc St.</option>
							<option value="Santol St.">Santol St.</option>
							<option value="Sineguelas St.">Sineguelas St.</option>
							<option value="Tindalo St.">Tindalo St.</option>
							<option value="Yakal St.">Yakal St.</option>
						</select>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="show_mycomplaint_cAddresszone" name="cAddresszone" disabled>
					</div>
					<div class="col-sm-7">
						<label for="respondentName" class="form-label">Name (Buong pangalan ng inirereklamo) :</label>
						<input type="text" class="form-control" id="show_mycomplaint_respondentName" name="respondentName" readonly>
					</div>
					<div class="col-sm-5">
						<label for="respondentAge" class="form-label">Age (Edad ng inirereklamo) :</label>
						<input type="text" class="form-control" id="show_mycomplaint_respondentAge" name="respondentAge" readonly>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="show_mycomplaint_rAddressno" name="rAddressno" placeholder="No." readonly>
					</div>
					<div class="col-sm-8">
						<select id="show_mycomplaint_rStreet" name="rStreet" class="form-select" readonly>
							<option selected>Street</option>
							<option value="1st Ave.">1st Ave.</option>
							<option value="10th Ave.">10th Ave.</option>
							<option value="10th St.">10th St.</option>
							<option value="11th Ave.">11th Ave.</option>
							<option value="11th St.">11th St.</option>
							<option value="2nd Ave.">2nd Ave.</option>
							<option value="3rd Ave.">3rd Ave.</option>
							<option value="4th Ave.">4th Ave.</option>
							<option value="4th Ave.">4th Ave.</option>
							<option value="4th St.">4th St.</option>
							<option value="5th Ave.">5th Ave.</option>
							<option value="5th St.">5th St.</option>
							<option value="6th Ave.">6th Ave.</option>
							<option value="6th St.">6th St.</option>
							<option value="7th Ave.">7th Ave.</option>
							<option value="7th St.">7th St.</option>
							<option value="8th Ave.">8th Ave.</option>
							<option value="8th St.">8th St.</option>
							<option value="9th Ave.">9th Ave.</option>
							<option value="9th St.">9th St.</option>
							<option value="Aguho St.">Aguho St.</option>
							<option value="Anonas St.">Anonas St.</option>
							<option value="Atis St.">Atis St.</option>
							<option value="Balimbing Ext.">Balimbing Ext.</option>
							<option value="Balimbing St.">Balimbing St.</option>
							<option value="Bravo St.">Bravo St.</option>
							<option value="Chesa St.">Chesa St.</option>
							<option value="Chico St.">Chico St.</option>
							<option value="Durian Ext.">Durian Ext.</option>
							<option value="Durian St.">Durian St.</option>
							<option value="Guiho St.">Guiho St.</option>
							<option value="Guyabano St.">Guyabano St.</option>
							<option value="Ilang-ilang St.">Ilang-ilang St.</option>
							<option value="Ipil-ipil St.">Ipil-ipil St.</option>
							<option value="Kaimito St.">Kaimito St.</option>
							<option value="Kasoy St.">Kasoy St.</option>
							<option value="Karamay St.">Karamay St.</option>
							<option value="Kawayan St..">Kawayan St..</option>
							<option value="Langka St.">Langka St.</option>
							<option value="Mabolo Ext.">Mabolo Ext.</option>
							<option value="Mabolo St.">Mabolo St.</option>
							<option value="Macopa Ext.">Macopa Ext.</option>
							<option value="Macopa St.">Macopa St.</option>
							<option value="Mangga St.">Mangga St.</option>
							<option value="Mangustan St.">Mangustan St.</option>
							<option value="Mansanas St.">Mansanas St.</option>
							<option value="Marang St.">Marang St.</option>
							<option value="Molave St.">Molave St.</option>
							<option value="Narra St.">Narra St.</option>
							<option value="Pajo St.">Pajo St.</option>
							<option value="Papaya Ext.">Papaya Ext.</option>
							<option value="Pili St.">Pili St.</option>
							<option value="Salamat Ext.">Salamat Ext.</option>
							<option value="Sampaguita St.">Sampaguita St.</option>
							<option value="Sampaloc Ext.">Sampaloc Ext.</option>
							<option value="Sampaloc St.">Sampaloc St.</option>
							<option value="Santol St.">Santol St.</option>
							<option value="Sineguelas St.">Sineguelas St.</option>
							<option value="Tindalo St.">Tindalo St.</option>
							<option value="Yakal St.">Yakal St.</option>
						</select>
					</div>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="show_mycomplaint_rAddresszone" name="rAddresszone" placeholder="Zone" readonly>
					</div>
					<div class="col-sm-12">
            <label for="show_mycomplaint_complaintDesc" class="form-label">Complaint:</label>
            <select id="show_mycomplaint_complaintDesc" name="show_mycomplaint_complaintDesc" class="form-select" readonly>
              <option selected>Common Complaints</option>
              <option value="Abandonment (Minors/Person in danger/etc.)">Abandonment (Minors/Person in danger/etc.)</option>
              <option value="Alarms & Scandals">Alarms & Scandals</option>
              <option value="Coercions (Grave or light)">Coercions (Grave or light)</option>
              <option value="Curfew">Curfew</option>
              <option value="Family Dispute">Family Dispute</option>
              <option value="Land & ownership">Land & ownership</option>
              <option value="Malicious Mischiefs">Malicious Mischiefs</option>
              <option value="Noise Problem">Noise Problem</option>
              <option value="Riot">Riot</option>
              <option value="Simple Seduction">Simple Seduction</option>
              <option value="Swindling (Minor or estafa)">Swindling (Minor or estafa)</option>
              <option value="Theft">Theft</option>
              <option value="Threats">Threats</option>
              <option value="Tresspass">Tresspass</option>
            </select>
          </div>
					<div class="col-sm-2">
						<label for="locationAddressno" class="form-label">Location (Lugar ng pinangyarihan) :</label>
						<input type="text" class="form-control" id="show_mycomplaint_locationAddressno" name="locationAddressno" readonly>
					</div>
          <div class="col-sm-5">
						<label for="locationStreet" class="form-label">Location (Lugar ng pinangyarihan) :</label>
						<input type="text" class="form-control" id="show_mycomplaint_locationStreet" name="locationStreet" readonly>
					</div>
					<div class="col-sm-5">
						<label for="complaintDate" class="form-label">Date (Kailan nangyari) :</label>
						<input type="date" class="form-control" id="show_mycomplaint_complaintDate" name="complaintDate" data-date-format="YYYY MM DD" readonly>
					</div>
					<div class="col-sm-12">
						<label for="complaintWhy" class="form-label">Why (Isalaysay kung bakit nagreklamo) :</label>
						<textarea class="form-control" id="show_mycomplaint_complaintWhy" name="complaintWhy" rows="3" readonly></textarea>
					</div>
					<div class="col-sm-12">
						<label for="complainantPrayer" class="form-label">Prayer (Isalaysay ang ang nais mangyari) :</label>
						<textarea class="form-control" id="show_mycomplaint_complainantPrayer" name="complainantPrayer" rows="3" readonly></textarea>
					</div>
					<div class="col-sm-12">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="i-certify" id="show_mycomplaint_complainantAgrees" name="complainantAgrees" checked>
							<label class="form-check-label" for="complainantAgrees">I hereby certify that the above information is true and correct to the best of my knowledge</label>
						</div>
					</div>
				</form>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="complaintUpdate">Update</button>
        </div>
			</div>
		</div>
	</div>
</div>