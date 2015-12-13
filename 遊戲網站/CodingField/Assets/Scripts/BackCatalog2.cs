using UnityEngine;
using System.Collections;

public class BackCatalog2 : MonoBehaviour {

    public GameObject BackCatalog2Object;
    // Use this for initialization
    void Start()
    {

    }

    // Update is called once per frame
    void Update()
    {

    }

    public void appear()
    {
        BackCatalog2Object.SetActive(true);
    }

    public void disappear()
    {
        BackCatalog2Object.SetActive(false);
    }
}