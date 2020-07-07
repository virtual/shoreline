@extends('_layouts.master')

@section('breadcrumb')
<ol>
  <li><a href="#">Home</a></li>
  <li><a href="#">Explore Programs</a></li>
  <li><a class="active" aria-current="page" href="#">Visual Communications Technology</a></li>
</ol>  
@endsection   
 
@section('content')
<h1>Selectbox</h1>
<h2 class="h3"><label for="combobox">Search Programs</label></h2>
<select id="combobox" class="dropdown-toggle dynamic-selectbox input-large form-control">
  <option value="" selected="selected">Find a Program</option>
  <option value="https://www.shoreline.edu/programs/accounting/accounting-certificate.aspx">Accounting Certificate</option>
  <option value="https://www.shoreline.edu/programs/accounting/accounting-aaas.aspx">Accounting AAAS</option>
  <option value="https://www.shoreline.edu/programs/accounting/account-clerk-certificate.aspx">Accounting Clerk Certificate </option>
  <option value="https://www.shoreline.edu/programs/accounting/accounts-receivable-clerk-certificate.aspx">Accounts Receivable Clerk Certificate</option>
  <option value="https://www.shoreline.edu/programs/performance-arts-and-digital-filmmaking/acting-for-stage-and-camera-certificate.aspx">Acting for Stage and Camera Certificate</option>
  <option value="https://www.shoreline.edu/programs/physical-sciences-transfer/aeronautical-civil-industrial-manufacturing-materials-science-mechanical-engineering-plastics-and-composites-pre-major.aspx">Aeronautical, Civil, Industrial, Manufacturing, Materials Science, </option>
  <option value="https://www.shoreline.edu/programs/general-transfer/american-ethnic-studies-pre-major.aspx">American Ethnic Studies Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/animation-video-for-multimedia-aaas.aspx">Animation/Video for Multimedia AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/anthropology-pre-major.aspx">Anthropology Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/art-history-pre-major.aspx">Art History Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/art-and-design-foundation-certificate.aspx">Art and Design Foundation Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/asian-studies-pre-major.aspx">Asian Studies Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/automotive/automotive-brakes-specialist-certificate.aspx">Automotive Brakes Specialist Certificate</option>
  <option value="https://www.shoreline.edu/programs/automotive/automotive-drivetrain-specialist-certificate.aspx">Automotive Drivetrain Specialist Certificate</option>
  <option value="https://www.shoreline.edu/programs/automotive/automotive-electrical-specialist-certificate.aspx">Automotive Electrical Specialist Certificate</option>
  <option value="https://www.shoreline.edu/programs/automotive/automotive-engine-specialist-certificate.aspx">Automotive Engine Specialist Certificate</option>
  <option value="https://www.shoreline.edu/programs/automotive/general-service-technician-gst-1.aspx">Automotive General Service Technician (GST) Certificate</option>
  <option value="https://www.shoreline.edu/programs/automotive/automotive-general-service-technician-program-gst-i-best-degree-program-ast-aaas.aspx">Automotive Service Technician AAAS</option>
  <option value="https://www.shoreline.edu/programs/automotive/honda-professional-automotive-career-training-pact-aaas.aspx">Honda Professional Automotive Career Training (PACT) AAAS</option>
  <option value="https://www.shoreline.edu/programs/automotive/mopar-college-automotive-program-moparcap-aaas.aspx">Mopar College Automotive Program (MoparCAP) AAAS</option>
  <option value="https://www.shoreline.edu/programs/automotive/toyota-technical-education-network-t-ten-aaas.aspx">Toyota Technician Training and Education Network (T-TEN) AAAS</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/basic-manufacturing-certificate.aspx">Basic Manufacturing Certificate</option>
  <option value="https://www.shoreline.edu/programs/physical-sciences-transfer/bioengineering-and-chemical-engineering-pre-major.aspx">Bioengineering and Chemical Engineering Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/natural-sciences-transfer/biological-sciences-pre-major.aspx">Biological Sciences Pre-Major<</option>
  <option value="https://www.shoreline.edu/programs/biotechnology/biotechnology-lab-specialist-certificate.aspx">Biotechnology Lab Specialist Certificate</option>
  <option value="https://www.shoreline.edu/programs/biotechnology/biotechnology-lab-specialist-aaas.aspx">Biotechnology Lab Specialist AAAS</option>
  <option value="https://www.shoreline.edu/programs/business-administration/business-aaas.aspx">Business AAAS</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/business-foundation-certificate.aspx">Business Foundation Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/business-pre-major.aspx">Business Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/natural-sciences-transfer/chemistry-biochemistry-pre-major.aspx">Chemistry/Biochemistry Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/early-childhood-education/child-advocacy-studies-certificate.aspx">Child Advocacy Studies Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/cinema-film-and-media-studies-pre-major.aspx">Cinema, Film &amp; Media Studies Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/music-performance/classical-piano-am.aspx">Classical Piano AM</option>
  <option value="https://www.shoreline.edu/programs/music-performance/classical-voice-am.aspx">Classical Voice AM</option>
  <option value="https://www.shoreline.edu/programs/clean-energy-technology/clean-energy-technology-and-entrepreneurship-certificate.aspx">Clean Energy Technology &amp; Entrepreneurship Certificate</option>
  <option value="https://www.shoreline.edu/programs/clean-energy-technology/clean-energy-technology-and-entrepreneurship-aaas.aspx">Clean Energy Technology and Entrepreneurship AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/communication-studies-pre-major.aspx">Communication Studies Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/computer-foundation-certificate.aspx">Computer Foundation Certificate</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/computer-graphics-foundation-certificate.aspx">Computer Graphics Foundation Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/computer-science-and-software-systems-pre-major.aspx">Computer Science &amp; Software Systems Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/physical-sciences-transfer/computer-and-electrical-engineering-pre-major.aspx">Computer &amp; Electrical Engineering Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/construction-management-pre-major.aspx">Construction Management Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/creative-project-management-aaas.aspx">Creative Project Management AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/creative-writing-pre-major.aspx">Creative Writing Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/criminal-justice/criminal-justice-aaas.aspx">Criminal Justice AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/criminal-justice-pre-major.aspx">Criminal Justice Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/dental-hygiene/dental-hygiene-aaas.aspx">Dental Hygiene AAAS</option>
  <option value="https://www.shoreline.edu/programs/music-technology/digital-audio-engineering-aaas.aspx">Digital Audio Engineering AAAS<</option>
  <option value="https://www.shoreline.edu/programs/performance-arts-and-digital-filmmaking/digital-film-production-aaas.aspx">Digital Film Production AAAS</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/digital-illustration-animation-certificate.aspx">Digital Illustration/Animation Certificate</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/digital-photography-certificate.aspx">Digital Photography Certificate</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/digital-video-certificate.aspx">Digital Video Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/drama-and-theatre-arts-pre-major.aspx">Drama &amp; Theater Arts Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/early-childhood-education/early-childhood-educator-paraeducator-aaas.aspx">Early Childhood Educator/Paraeducator AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/economics-pre-major.aspx">Economics Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/automotive/tesla-certificate.aspx">Electric Vehicle Technician (Tesla) Certificate</option>
  <option value="https://www.shoreline.edu/programs/music-technology/electronic-midi-music-production-aaas.aspx">Electronic/MIDI Music Production AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/elementary-education-pre-major.aspx">Elementary Education Pre-Major<</option>
  <option value="https://www.shoreline.edu/programs/physical-sciences-transfer/engineering-pre-major.aspx">Engineering Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/business-administration/entrepreneurship-certificate-2.aspx">Entrepreneurship Certificate<</option>
  <option value="https://www.shoreline.edu/programs/business-administration/entrepreneurship-certificate-1.aspx">Entrepreneurship Certificate<</option>
  <option value="https://www.shoreline.edu/programs/business-administration/entrepreneurship-aaas.aspx">Entrepreneurship AAAS</option>
  <option value="https://www.shoreline.edu/programs/natural-sciences-transfer/environmental-health-pre-major.aspx">Environmental Health Pre-Major<</option>
  <option value="https://www.shoreline.edu/programs/natural-sciences-transfer/environmental-sciences-pre-major.aspx">Environmental Sciences Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/environmental-studies-pre-major.aspx">Environmental Studies Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/exercise-science-and-kinesiology-pre-major.aspx">Exercise Science &amp; Kinesiology Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/business-administration/fashion-merchandising-certificate-2.aspx">Fashion Merchandising Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/fashion-merchandising-certificate-1.aspx">Fashion Merchandising Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/fashion-merchandising-aaas.aspx">Fashion Merchandising AAAS</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/visual-communications-foundation-certificate.aspx">Visual Communications Foundation Certificate</option>
  <option value="https://www.shoreline.edu/programs/fine-arts/foundation-studio-art-AFA.aspx">Foundation Studio Art AFA</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/visual-communications-foundation-specialization-certificate.aspx">Visual Communications Foundation with Specialization Certificate</option>
  <option value="https://www.shoreline.edu/programs/music-technology/foundations-of-digital-audio-pro-tools-certificate.aspx">Foundations of Digital Audio - Pro Tools Certificate</option>
  <option value="https://www.shoreline.edu/programs/music-technology/foundations-of-electronic-music-certificate.aspx">Foundations of Electronic Music Certificate</option>
  <option value="https://www.shoreline.edu/programs/music-technology/foundations-of-multi-track-recording-certificate.aspx">Foundations of Multi-Track Recording Certificate</option>
  <option value="https://www.shoreline.edu/programs/music-technology/foundations-of-music-business-certificate.aspx">Foundations of Music Business Certificate</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/game-and-art-design-aaas.aspx">Game Art and Design AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/gender-and-womens-studies-pre-major.aspx">Gender &amp; Women's Studies Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/business-administration/general-business-administration-certificate.aspx">General Business Administration Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/general-business-administration-certificate-1.aspx">General Business Administration Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/general-business-administration-aaas.aspx">General Business Administration AAAS</option>
  <option value="https://www.shoreline.edu/programs/automotive/general-motors-automotive-service-educational-program-asep-aaas.aspx">General Motors Automotive Service Educational Program (ASEP) AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/geography-pre-major.aspx">Geography Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/natural-sciences-transfer/geology-and-earth-sciences-pre-major.aspx">Geology &amp; Earth Sciences Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/graphic-design-aaas.aspx">Graphic Design AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/health-informatics-and-information-management-pre-major.aspx">Health Informatics &amp; Information Management Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/health-information-technology/health-information-foundations-certificate.aspx">Health Information Foundations Certificate</option>
  <option value="https://www.shoreline.edu/programs/health-information-technology/health-information-technology-aaas.aspx">Health Information Technology AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/history-pre-major.aspx">History Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/humanities-pre-major.aspx">Humanities Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/informatics-pre-major.aspx">Informatics Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/music-performance/instrumental-music-pre-major.aspx">Instrumental Music AM</option>
  <option value="https://www.shoreline.edu/programs/business-administration/international-trade-certificate.aspx">International Trade Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/international-global-studies-pre-major.aspx">International/Global Studies Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/journalism-pre-major.aspx">Journalism Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/language-and-literature-pre-major.aspx">Language &amp; Literature Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/music-technology/logic-digital-audio-certificate.aspx">Logic: Digital Audio Certificate</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/machine-maintenance-certificate.aspx">Machine Maintenance Certificate</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/manufacturing-machinist-technology-certificate.aspx">Manufacturing/Machinist Technology Certificate</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/manufacturing-machinist-technology-aaas.aspx">Manufacturing/Machinist Technology AAAS</option>
  <option value="https://www.shoreline.edu/programs/business-administration/marketing-certificate-2.aspx">Marketing Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/marketing-certificate-1.aspx">Marketing Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/marketing-aaas.aspx">Marketing AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/mathematics-applied-math-statistics-pre-major.aspx">Mathematics/Applied Math/Statistics Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/mechatronics-certificate.aspx">Mechatronics Certificate</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/mechatronics-aaas.aspx">Mechatronics AAAS</option>
  <option value="https://www.shoreline.edu/programs/health-information-technology/medical-coding-and-reimbursement-specialist-certificate.aspx">Medical Coding and Reimbursement Specialist Certificate</option>
  <option value="https://www.shoreline.edu/programs/natural-sciences-transfer/medical-laboratory-science-pre-major.aspx">Medical Laboratory Science Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/medical-laboratory-technology/medical-laboratory-technology-certificate.aspx">Medical Laboratory Technology Certificate</option>
  <option value="https://www.shoreline.edu/programs/medical-laboratory-technology/medical-laboratory-technology-aaas.aspx">Medical Laboratory Technology AAAS</option>
  <option value="https://www.shoreline.edu/programs/business-technology/microsoft-software-applications-certificate.aspx">Microsoft Software Applications Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/multicultural-studies-pre-major.aspx">Multicultural Studies Pre-major</option>
  <option value="https://www.shoreline.edu/programs/music-technology/music-business-aaas.aspx">Music Business AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/music-pre-major.aspx">Music Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/music-technology/music-performance-aaas.aspx">Music Performance AAAS</option>
  <option value="https://www.shoreline.edu/programs/nursing/nursing-10-quarter-aas-t.aspx">Nursing (RN) - 10-Quarter AAS-T</option>
  <option value="https://www.shoreline.edu/programs/nursing/nursing-6-quarter-aas-t.aspx">Nursing (RN) - 6-Quarter AAS-T</a></optiS-T

  <option value="https://www.shoreline.edu/programs/nursing/lpn-rn-aas-t.aspx">Nursing - LPN to RN Advanced Placement Option </option>
  <option value="https://www.shoreline.edu/programs/nursing-assistant-certified/nursing-assistant-certified-certificate.aspx">Nursing Assistant Certified Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/nutrition-and-food-science-pre-major.aspx">Nutrition and Food Science Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/natural-sciences-transfer/oceanography-and-marine-sciences-pre-major.aspx">Oceanography and Marine Sciences Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/accounting/payroll-clerk-certificate.aspx">Payroll Clerk Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/philosophy-pre-major.aspx">Philosophy Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/phlebotomy/phlebotomy-certificate.aspx">Phlebotomy Certificate</option>
  <option value="https://www.shoreline.edu/programs/fine-arts/photography-AFA.aspx">Photography AFA</option>
  <option value="https://www.shoreline.edu/programs/physical-sciences-transfer/physics-and-astronomy-pre-major.aspx">Physics and Astronomy Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/political-science-pre-major.aspx">Political Science Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/music-technology/pop-and-commercial-music-theory-certificate.aspx">Pop and Commercial Music Theory Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/pre-nursing-pre-major.aspx">Pre-Nursing Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/principles-of-precision-machining-certificate.aspx">Principles of Precision Machining Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/project-management-certificate.aspx">Project Management Certificate<</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/psychology-pre-major.aspx">Psychology Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/public-and-community-health-pre-major.aspx">Public &amp; Community Health Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/purchasing-and-supply-chain-management/purchasing-and-contract-management-certificate.aspx">Purchasing and Contract Management Certificate</option>
  <option value="https://www.shoreline.edu/programs/purchasing-and-supply-chain-management/purchasing-and-supply-chain-management-certificate-2.aspx">Purchasing and Supply Chain Management Certificate</option>
  <option value="https://www.shoreline.edu/programs/purchasing-and-supply-chain-management/purchasing-and-supply-chain-management-certificate-1.aspx">Purchasing and Supply Chain Management Certificate</option>
  <option value="https://www.shoreline.edu/programs/purchasing-and-supply-chain-management/purchasing-and-supply-chain-management-aaas.aspx">Purchasing and Supply Chain Management AAAS</option>
  <option value="https://www.shoreline.edu/programs/manufacturing/quality-assurance-certificate.aspx">Quality Assurance Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/retail-management-certificate-2.aspx">Retail Management Certificate<</option>
  <option value="https://www.shoreline.edu/programs/business-administration/retail-management-certificate-1.aspx">Retail Management Certificate<</option>
  <option value="https://www.shoreline.edu/programs/business-administration/retail-management-aaas.aspx">Retail Management AAAS</option>
  <option value="https://www.shoreline.edu/programs/business-administration/retail-management-western-association-of-food-chains-wafc-endorsement-certificate.aspx">Retail Management Western Association Of Food Chains (Wafc Endorsement) Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/secondary-education-pre-major.aspx">Secondary Education Pre-Major<</option>
  <option value="https://www.shoreline.edu/programs/business-administration/social-media-marketing-certificate.aspx">Social Media Marketing Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/social-work-and-human-services-pre-major.aspx">Social Work and Human Services Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/sociology-pre-major.aspx">Sociology Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/early-childhood-education/special-education-aaas.aspx">Special Education AAAS</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/speech-and-hearing-sciences-pre-major.aspx">Speech and Hearing Sciences Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/early-childhood-education/state-early-childhood-education-certificate.aspx">State Early Childhood Education Certificate</option>
  <option value="https://www.shoreline.edu/programs/early-childhood-education/state-initial-early-childhood-education-certificate.aspx">State Initial Early Childhood Education Certificate</option>
  <option value="https://www.shoreline.edu/programs/early-childhood-education/state-short-early-childhood-education-certificate-general.aspx">State Short Early Childhood Education Certificate - General</option>
  <option value="https://www.shoreline.edu/programs/early-childhood-education/state-short-early-childhood-education-certificate-infants-and-toddlers.aspx">State Short Early Childhood Education Certificate - Infants and Toddlers</option>
  <option value="https://www.shoreline.edu/programs/purchasing-and-supply-chain-management/supplier-relations-and-logistics-certificate.aspx">Supplier Relations and Logistics Certificate</option>
  <option value="https://www.shoreline.edu/programs/business-administration/sustainable-business-leadership-certificate.aspx">Sustainable Business Leadership Certificate</option>
  <option value="https://www.shoreline.edu/programs/purchasing-and-supply-chain-management/sustainable-purchasing-and-supply-chain-management-certificate.aspx">Sustainable Purchasing and Supply Chain Management Certificate<</option>
  <option value="https://www.shoreline.edu/programs/accounting/tax-preparer-certificate.aspx">Tax Preparer Certificate</option>
  <option value="https://www.shoreline.edu/programs/visual-communications-technology/web-design-certificate.aspx">Web Design Certificate</option>
  <option value="https://www.shoreline.edu/programs/general-transfer/world-languages-pre-major.aspx">World Languages Pre-Major</option>
  <option value="https://www.shoreline.edu/programs/performance-arts-and-digital-filmmaking/writing-and-directing-for-the-camera-certificate.aspx">Writing and Directing for the Camera Certificate</option>
</select>
@endsection
  